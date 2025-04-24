<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Book Reviews</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>

  {{-- blade-formatter-disable --}}
  <style type="text/tailwindcss">
    .btn {
      @apply bg-white rounded-md px-4 py-2 text-center font-medium text-indigo-800 shadow-sm ring-1 ring-indigo-800/20 hover:bg-indigo-100 h-10;
    }

    .input {
      @apply shadow-sm appearance-none border w-full py-2 px-3 text-indigo-900 leading-tight focus:outline-none rounded-md border-indigo-300 bg-white;
    }

    .filter-container {
      @apply mb-4 flex space-x-2 rounded-md bg-indigo-100 p-2;
    }

    .filter-item {
      @apply flex w-full items-center justify-center rounded-md px-4 py-2 text-center text-sm font-medium text-indigo-700;
    }

    .filter-item-active {
      @apply bg-white shadow-sm text-indigo-900 flex w-full items-center justify-center rounded-md px-4 py-2 text-center text-sm font-medium;
    }

    .book-item {
      @apply text-sm rounded-md bg-white p-4 leading-6 text-indigo-900 shadow-md shadow-black/5 ring-1 ring-indigo-300;
    }

    .book-title {
      @apply text-lg font-semibold text-indigo-900 hover:text-indigo-700;
    }

    .book-author {
      @apply block text-indigo-700;
    }

    .book-rating {
      @apply text-sm font-medium text-indigo-800;
    }

    .book-review-count {
      @apply text-xs text-indigo-600;
    }

    .empty-book-item {
      @apply text-sm rounded-md bg-white py-10 px-4 text-center leading-6 text-indigo-800 shadow-md shadow-black/5 ring-1 ring-indigo-300;
    }

    .empty-text {
      @apply font-medium text-indigo-600;
    }

    .reset-link {
      @apply text-indigo-700 underline;
    }

    .cancel-btn {
      @apply rounded-md px-4 py-2 text-center font-medium text-red-600 shadow-sm ring-1 ring-red-600/20 hover:bg-red-50;
    }
  </style>
  {{-- blade-formatter-enable --}}
</head>

<body class="bg-indigo-200 container mx-auto mt-10 mb-10 max-w-3xl">
  @yield('content')
</body>

</html>
