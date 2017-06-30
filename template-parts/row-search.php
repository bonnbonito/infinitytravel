<div class="row-search">
  <div class="ui middle aligned center aligned grid padded">
    <div class="column left aligned">
      <form class="ui form" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
        <div class="inline fields">
          <div class="sixteen wide field">
            <label for="s-hotels">Search</label>
            <div class="ui fluid search">
              <div class="ui icon input">
                <input class="prompt" type="text" placeholder="Search Hotels" name="s" id="s-hotels">
                <i class="search icon"></i>
                <input type="submit" class="s-submit">
              </div>
              <div class="results"></div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
