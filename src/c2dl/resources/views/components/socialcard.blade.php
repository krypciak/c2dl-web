<article class="c2dl-social c2dl-social-{{ $entry->type }}">
    <header class="c2dl-social-header">
        <i class="c2dl-social-logo c2dl-social-{{ $entry->type }}-logo" title="{{ $entry->type }}"></i>
        <div class="c2dl-social-title">
            <span class="c2dl-social-title-text c2dl-social-{{ $entry->type }}-main">{{ $entry->main }}</span>
            @isset($entry->sub)
                <span class="c2dl-social-title-subtext c2dl-social-{{ $entry->type }}-sub">{{ $entry->sub }}</span>
            @endisset
        </div>
        @isset($entry->side)
        <div class="c2dl-social-sideinfo">
            <span class="c2dl-social-sidetext c2dl-social-{{ $entry->type }}-side">{{ $entry->side }}</span>
        </div>
        @endisset
    </header>
    <nav class="c2dl-social-nav">
        <a class="c2dl-social-link c2dl-social-{{ $entry->type }}-link" rel="noopener" target="_blank"
           href="{{ $entry->link }}">
            @if ($entry->link_type == 'join')
                {{ __('home.join') }}
            @else
                {{ __('home.visit') }}
            @endif
        </a>
    </nav>
</article>