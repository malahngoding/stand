<div>
    <div class="bg-white min-h-screen font-mono ">
        <div class="container mx-auto">
            <div class="inputs w-full max-w-2xl p-6 ">
                <h2 class="text-2xl text-gray-900">Create Quiz Question</h2>
                <form wire:submit.prevent="save('{{$query_id}}')" class="mt-6 border-t border-gray-400 pt-4">
                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'
                            for='grid-text-1'>Question Text</label>
                        <textarea wire:model="form.text"
                            class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                            id='form.text' type='textbox' placeholder='Enter Question Text'></textarea>
                        @error('form.text') <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'
                            for='grid-text-1'>Answer</label>
                        <input wire:model="form.answer1"
                            class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                            id='form.answer1' type='text' placeholder='Enter answer'>
                        @error('form.answer1') <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        <input wire:model="form.answer2"
                            class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                            id='form.answer2' type='text' placeholder='Enter answer'>
                        @error('form.answer2') <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        <input wire:model="form.answer3"
                            class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                            id='form.answer3' type='text' placeholder='Enter answer'>
                        @error('form.answer3') <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        <input wire:model="form.answer4"
                            class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                            id='form.answer4' type='text' placeholder='Enter answer'>
                        @error('form.answer4') <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        <input wire:model="form.answer5"
                            class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                            id='form.answer5' type='text' placeholder='Enter answer'>
                        @error('form.answer5') <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class='w-full md:w-full px-3'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'
                            for='grid-text-1'>Correct Answer</label>
                        <select wire:model="form.correct_answer"
                            class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                            id='form.correct_answer' type='options' placeholder='Enter answer'>
                            <option value="0">1</option>
                            <option value="1">2</option>
                            <option value="2">3</option>
                            <option value="3">4</option>
                            <option value="4">5</option>
                        </select>
                        @error('form.correct_answer') <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <div class='w-full md:w-1/2 px-3 mb-6'>
                            <label
                                class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Picture</label>
                            @if ($picture)
                            Photo Preview:
                            <img src="{{ $picture->temporaryUrl() }}">
                            @endif
                            <input wire:model="picture"
                                class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                type='file'>
                            @error('form.picture') <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class='w-full md:w-1/2 px-3 mb-6'>
                            <label
                                class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Score</label>
                            <input wire:model="form.score"
                                class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                type='text'>
                            @error('form.score') <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex justify-end mx-3">
                        <button wire:click="save('{{$query_id}}')"
                            class="appearance-none bg-gray-200 text-gray-900 px-2 py-1 shadow-sm border border-gray-400 rounded-md mr-3">save
                            changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
