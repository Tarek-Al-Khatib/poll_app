<div>
    <form wire:submit.prevent="createPoll">
        <label>Poll Title</label>

        <input type="text" wire:model.live="title" />

        Current Title: {{ $title }}

        <div class="mt-4">
            <button class="btn" wire:click.prevent="addOption">Add option</button>
        </div>

        <div class="mt-4">
            @foreach ($options as $index => $option) 
            <div class="mb-4">
                <label>Option {{ $index + 1 }}</label>
                <div class="flex gap-2">
                    <input type="text" wire:wire:model="options.{{ $index }}"/>
                    <button class="btn" wire:click.prevent="removeOption({{ $index }})">Remove</button>
                </div>
            </div>


            @endforeach
        </div>


        <button type="submit" class="btn">Create poll</button>
    </form>
</div>