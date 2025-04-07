<div class="flex justify-center items-center">
    <ul class="grid content-center justify-center grid-cols-2 gap-4 md:grid-cols-5">
        @foreach ($dogs as $dog)
            <x-dog.dog-card :dog="$dog" />
        @endforeach
    </ul>
</div>
