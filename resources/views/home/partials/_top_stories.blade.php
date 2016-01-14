

<top></top>

<template id="top-stories">
      <div class="row">
  <div class="col-md-4" v-for="post in posts">
    <h2>@{{ post.title }}</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
  </div>
</div>
</template>
