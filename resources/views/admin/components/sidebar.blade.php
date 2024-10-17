 <!-- start sidebar -->
  <div id="sideBar" class="relative flex flex-col flex-wrap flex-none w-64 p-6 bg-white border-r border-gray-300 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">


    <!-- sidebar content -->
    <div class="flex flex-col">

      <!-- sidebar toggle -->
      <div class="hidden mb-4 text-right md:block">
        <button id="sideBarHideBtn">
          <i class="fad fa-times-circle"></i>
        </button>
      </div>
      <!-- end sidebar toggle -->

      {{-- <p class="mb-4 text-xs tracking-wider text-gray-600 uppercase">homes</p> --}}

      <!-- link -->
      {{-- <a href="./index.html" class="mb-3 text-sm font-medium capitalize transition duration-500 ease-in-out hover:text-teal-600">
        <i class="mr-2 text-xs fad fa-chart-pie"></i>
        Analytics dashboard
      </a> --}}
      <!-- end link -->

      <!-- link -->
      {{-- <a href="./index-1.html" class="mb-3 text-sm font-medium capitalize transition duration-500 ease-in-out hover:text-teal-600">
        <i class="mr-2 text-xs fad fa-shopping-cart"></i>
        ecommerce dashboard
      </a> --}}
      <!-- end link -->

      <p class="mt-4 mb-4 text-xs tracking-wider text-gray-600 uppercase">apps</p>

      <!-- link -->
      <a href="/users" class="mb-3 text-sm font-medium capitalize transition duration-500 ease-in-out hover:text-teal-600">
        <i class="mr-2 text-xs fad fa-users"></i>
        Find Users
      </a>
      <!-- end link -->



      <!-- link -->
      <a href="https://mail.hostinger.com/?clearSession=true&_user={{ Auth::user()->email }}" class="mb-3 text-sm font-medium capitalize transition duration-500 ease-in-out hover:text-teal-600">
        <i class="mr-2 text-xs fad fa-envelope-open-text"></i>
        Go to Hostinger Mail
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="/chat" class="mb-3 text-sm font-medium capitalize transition duration-500 ease-in-out hover:text-teal-600">
        <i class="mr-2 text-xs fad fa-comments"></i>
        chat
      </a>
      <!-- end link -->

  
  

  @php
  $sidebarController = new \App\Http\Controllers\SidebarController();
  $sidebarItems = $sidebarController->index();

  // Group items by parent_id to handle parent-child relationships
  $menuItems = $sidebarItems->groupBy('parent_id');
@endphp

<ul class="sidebar-menu">
  @foreach($menuItems as $parentId => $items) {{-- Iterate over grouped items --}}
      @if(is_null($parentId)) {{-- Top-level menu items (where parent_id is null) --}}
          @foreach($items as $parentItem)
              @if(auth()->user()->is_superadmin || auth()->user()->hasPermission($parentItem->permission->title ?? '')) {{-- Check permissions --}}
                  <li class="menu-item">
                      <a href="{{ $parentItem->url }}" class="menu-link">
                          <i class="{{ $parentItem->icon }}"></i>
                          <div data-i18n="{{ $parentItem->menu_item }}">{{ $parentItem->menu_item }}</div>
                      </a>
                  </li>
              @endif
          @endforeach
      @else {{-- Child items with a specific parent_id --}}
          @foreach($items as $childItem)
              @if(auth()->user()->is_superadmin || auth()->user()->hasPermission($childItem->permission->title ?? '')) {{-- Check permissions --}}
                  <li class="menu-item">
                      <a href="{{ $childItem->url }}" class="mb-3 text-sm font-medium capitalize transition duration-500 ease-in-out hover:text-teal-600  ">
                          <i class="{{ $childItem->icon }}"></i>
                          {{ $childItem->menu_item }}
                      </a>
                  </li>
              @endif
          @endforeach
      @endif
  @endforeach
</ul>





  





      {{-- <!-- link -->
      <a href="#" class="mb-3 text-sm font-medium capitalize transition duration-500 ease-in-out hover:text-teal-600">
        <i class="mr-2 text-xs fad fa-shield-check"></i>
        todo
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 text-sm font-medium capitalize transition duration-500 ease-in-out hover:text-teal-600">
        <i class="mr-2 text-xs fad fa-calendar-edit"></i>
        calendar
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 text-sm font-medium capitalize transition duration-500 ease-in-out hover:text-teal-600">
        <i class="mr-2 text-xs fad fa-file-invoice-dollar"></i>
        invoice
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 text-sm font-medium capitalize transition duration-500 ease-in-out hover:text-teal-600">
        <i class="mr-2 text-xs fad fa-folder-open"></i>
        file manager
      </a>
      <!-- end link -->


      <p class="mt-4 mb-4 text-xs tracking-wider text-gray-600 uppercase">UI Elements</p>

      <!-- link -->
      <a href="./typography.html" class="mb-3 text-sm font-medium capitalize transition duration-500 ease-in-out hover:text-teal-600">
        <i class="mr-2 text-xs fad fa-text"></i>
        typography
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="./alert.html" class="mb-3 text-sm font-medium capitalize transition duration-500 ease-in-out hover:text-teal-600">
        <i class="mr-2 text-xs fad fa-whistle"></i>
        alerts
      </a>
      <!-- end link -->


      <!-- link -->
      <a href="./buttons.html" class="mb-3 text-sm font-medium capitalize transition duration-500 ease-in-out hover:text-teal-600">
        <i class="mr-2 text-xs fad fa-cricket"></i>
        buttons
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 text-sm font-medium capitalize transition duration-500 ease-in-out hover:text-teal-600">
        <i class="mr-2 text-xs fad fa-box-open"></i>
        Content
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 text-sm font-medium capitalize transition duration-500 ease-in-out hover:text-teal-600">
        <i class="mr-2 text-xs fad fa-swatchbook"></i>
        colors
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 text-sm font-medium capitalize transition duration-500 ease-in-out hover:text-teal-600">
        <i class="mr-2 text-xs fad fa-atom-alt"></i>
        icons
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 text-sm font-medium capitalize transition duration-500 ease-in-out hover:text-teal-600">
        <i class="mr-2 text-xs fad fa-club"></i>
        card
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 text-sm font-medium capitalize transition duration-500 ease-in-out hover:text-teal-600">
        <i class="mr-2 text-xs fad fa-cheese-swiss"></i>
        Widgets
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 text-sm font-medium capitalize transition duration-500 ease-in-out hover:text-teal-600">
        <i class="mr-2 text-xs fad fa-computer-classic"></i>
        Components
      </a>
      <!-- end link --> --}}



    </div>
    <!-- end sidebar content -->

  </div>
  <!-- end sidbar -->
