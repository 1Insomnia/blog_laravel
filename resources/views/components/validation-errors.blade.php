<div>
    @if ($errors->any())
        <div class="py-4">
            <p class="font-medium text-red-600">Whoops! Something went wrong.</p>
            <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
