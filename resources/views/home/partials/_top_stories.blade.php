

<top></top>

<template id="top-stories">
      <div class="row">
  <div class="col-md-4" v-if="!loading" v-for="post in posts">
    <h2>@{{ post.title }}</h2>
    <p>@{{ post.content }} </p>
    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
  </div>
</div>
</template>
