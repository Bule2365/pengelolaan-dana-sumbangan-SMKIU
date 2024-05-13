<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inbox</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-semibold text-center mb-8">Inbox</h1>
        <div class="max-w-xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
            @if ($feedbacks->isEmpty())
            <p class="text-center py-4">Tidak ada surat masuk saat ini.</p>
            @else
            <ul class="divide-y divide-gray-200">
                @foreach ($feedbacks as $feedback)
                <li class="py-4 px-6 flex justify-between items-center">
                    <p class="text-gray-800 flex-grow">{{ $feedback->feedback_text }}</p>
                    <div class="flex items-center space-x-4">
                        <form action="{{ route('user.showFeedback', $feedback->id) }}" method="GET">
                            @csrf
                            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">Lihat</button>
                        </form>
                        <form action="{{ route('user.deleteFeedback', $feedback->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline transition-colors duration-300 ease-in-out">Hapus</button>
                        </form>
                    </div>
                </li>
                @endforeach
            </ul>
            @endif
        </div>
        <div class="flex justify-center mt-8">
            <a href="{{ route('user.homepage') }}" class="flex items-center justify-center bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                <svg class="h-6 w-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Kembali
            </a>
        </div>
    </div>
</body>

</html>