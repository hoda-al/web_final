@if ($errors->any())
<div id="alert-2" class="flex items-center text-base p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-500" role="alert">

     @foreach ($errors->all() as $error)

        {{ $error }}
     @endforeach
</div>
@endif
