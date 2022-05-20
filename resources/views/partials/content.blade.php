@php

    $cc = $contents->count();
    if($cc < 1) {
        $contents = collect([[
          'title' => 'Whoops!',
          'content' => 'Data not Found',
        ]]);
    }
@endphp

<div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
  <div class="grid grid-cols-1 md:grid-cols-2">
      @foreach ($contents as $key => $data)
        {!! \UiHelp::gridGenerator(
          $key,
          \UiHelp::readMore($data['title'],'...',20),
          \UiHelp::readMore($data['content'],'...',110)
          ) 
        !!}  
      @endforeach
  </div>
</div>
{{ $cc ? $contents->links() : ''}}