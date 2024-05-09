<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>


<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($coupons as $post)
        <?php
        if($post->getTable() == 'coupons'){
            $link = 'single-coupons';
        }elseif($post->getTable() == 'categories'){
            $link = 'collection';
        }elseif ($post->getTable() == 'blogs'){
            $link = 'blog';
        }elseif ($post->getTable() == 'pages'){
            $link = 'page';
        }elseif ($post->getTable() == 'videos'){
            $link = 'video';
        }
        else{
            $link = '';
        }

        ?>
        <url>
            <loc>{{ url('/') }}/{{$link}}/{{ $post->slug }}</loc>
            <lastmod>{{ $post->updated_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
</urlset>
