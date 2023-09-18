
@props(['name', 'label'])

<label {{$attributes->merge(['class'=>'block mb-2 text-sm font-medium text-gray-900 dark:text-white',
                            'for'=> $name ?: $slot])}}>{{$label ?: $slot}}</label>
<input {{$attributes->merge(['class'=>'block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400', 
                            'aria-describedby'=>'file_input_help',
                            'type'=>'file',
                            'name'=> $name ?: $slot])}}>
<p class="mt-1 text-sm text-gray-500 dark:text-gray-300">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
