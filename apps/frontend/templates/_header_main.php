<div id="header-main" class="clearfix">
  <a href="/" class="col_lt" title="Tour Volume Concert listing home page">Tour Volume Concert listings</a>
  <form action="/api/search" method="get" id="header_search" class="col_rt">
    <input type="text" value="Search for Artist, Venue, or City" class="search" name="search_all" value="" id="search_all" onblur="if(this.value=='') this.value='Search for Artist, Venue, or City'" onfocus="if(this.value=='Search for Artist, Venue, or City') this.value=''" />
    <input type="image" src="/img/searchbutton.png" />
    <input type="hidden" id="searchCat" name="searchCat" value="" />
  </form>
</div>
<ul id="header-nav" class="clearfix">
  <li><a id="tourvolume-home" href="/" title="Tour Volume Concert listing home page">Tour Volume Concert listings</a></li>
  <li><a id="tourvolume-artists" href="/" title="Tour Volume Concert listings by artist">Hot artists in concerts</a></li>
  <li><a id="tourvolume-concerts" href="/" title="Tour Volume Concert listings by city">Concert listings</a></li>
</ul>