@if($paginator->hasPages())
    <div class="col text-center">
        <div class="block-27">
            <ul>
                @if ($paginator->onFirstPage())
                <li><a href="#" class=" disabled">&lt;</a></li>
                @else
                <li><a href="{{$paginator->previousPageUrl()}}" >&lt;</a></li>
                @endif
                @foreach ($elements as $element )
                @if (is_string($element ))
                <li><a href="#" class="page-item disabled">{{$element}}</a></li>
                @endif
                @endforeach
                @if (is_array($element ))
                @foreach ($element as $page=>$url)
                @if (  $page == $paginator->currentPage())
                <li class="active"><span>{{$page}}</span></li>
                @else
                <li class="">
                    <a class="" href="{{$url}}">{{$page}}</a>
                </li>
                @endif

                @endforeach
                @endif

                @if ($paginator->hasMorePages())
                <li><a href="{{$paginator->nextPageUrl()}}">&gt;</a></li>
                @else
                <li class="disabled"><a href="">&gt;</a></li>
                @endif
              </ul>

                </div>
                </div>
    
@endif
