<!-- Required meta tags -->
<meta charset="utf-8" />
<meta
  name="viewport"
  content="width=device-width, initial-scale=1, shrink-to-fit=no"
/>
@include('dashboards.layouts.links.style-links')
<title>MT Informatique -
    @if($user->role === 'Admin')
        Admin Dashboard
    @elseif($user->role === 'Employe')
        Employe Dashboard
    @endif
</title>

<!-- Add site Favicon -->
<link
  rel="icon"
  href="{{asset('assets/dashboard/images/favicon/icon-32x32.png')}}"
  sizes="32x32"
/>
<link
  rel="icon"
  href="{{asset('assets/dashboard/images/favicon/icon-192x192.png')}}"
  sizes="192x192"
/>
<link
  rel="apple-touch-icon"
  href="{{asset('assets/dashboard/images/favicon/icon-180x180.png')}}"
/>
<meta
  name="msapplication-TileImage"
  content="{{asset('assets/dashboard/images/favicon/icon-270x270.png')}}"
/>
