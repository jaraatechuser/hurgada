{{-- SEO Meta Component --}}
{{-- Usage: @include('components.seo-meta', ['title' => 'Custom Title', 'description' => 'Custom Description']) --}}

@if(isset($title))
    @section('title', $title)
@endif

@if(isset($description))
    @section('description', $description)
@endif

@if(isset($keywords))
    @section('keywords', $keywords)
@endif

@if(isset($og_title))
    @section('og_title', $og_title)
@endif

@if(isset($og_description))
    @section('og_description', $og_description)
@endif

@if(isset($og_image))
    @section('og_image', $og_image)
@endif

@if(isset($twitter_title))
    @section('twitter_title', $twitter_title)
@endif

@if(isset($twitter_description))
    @section('twitter_description', $twitter_description)
@endif

@if(isset($twitter_image))
    @section('twitter_image', $twitter_image)
@endif

@if(isset($canonical))
    @section('canonical', $canonical)
@endif

@if(isset($structured_data))
    @section('structured_data', $structured_data)
@endif
