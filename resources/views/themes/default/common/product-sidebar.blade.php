<div class="sidebar-card reveal">
    <!-- Heading -->
    <div class="px-7 pt-7 pb-5 border-b border-gray-100">
        <h3 class="text-2xl font-bold text-primary">
            Product Categories
        </h3>
    </div>

    <!-- Links -->
    <div>
        @foreach($data_child as $row)
            <a href="{{ url(geturl($row['uri'], $row['page_key'])) }}"
               class="sidebar-link {{ $loop->last ? 'border-b-0' : '' }}">
                <span>{{ $row->post_title }}</span>
                <i class="fa-solid fa-angle-right"></i>
            </a>
        @endforeach
    </div>
</div>