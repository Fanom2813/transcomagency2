<!-- ======= About Us Section ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>{{ $title }}</h2>
            <ol>
                <li><a href="{{ route('index') }}">Home</a></li>
                @php
                    $parts = explode('/', Request::path());
                    $url = '';
                @endphp
                @foreach($parts as $part)
                    @php
                        $url .= '/' . $part;
                    @endphp
                    <li><a href="{{ url($url) }}">{{ ucfirst($part) }}</a></li>
                @endforeach
            </ol>
        </div>

    </div>
</section><!-- End About Us Section -->