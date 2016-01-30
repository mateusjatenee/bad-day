<template>
 <div id="share_story" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="gridModalLabel">Share a story</h4>
        </div>
        <div class="modal-body">
          <div class="container-fluid bd-example-row">
            <form v-on="submit: sendForm" v-if="auth">

              <fieldset class="form-group">
              <label for="">URL</label>
              <input type="text" class="form-control" placeholder="URL" v-model="postData.url">
              <br>

              <button type="button" class="btn btn-lg btn-primary" @click="getTitle">
              <span v-show="!getTitleLoading">Get title</span>
              <span v-show="getTitleLoading">We're on it...</span> 
              <center><div class="loader text-center" v-show="getTitleLoading"></div></center>
              </button>

              </fieldset>
              <fieldset class="form-group">
                <label for="formGroupExampleInput">Title</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Post title" v-model="postData.title">
              </fieldset>
            </form>
            <div v-if="!auth">Please login before posting an story. We do this to avoid spam.</div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary btn-lg" @click="sendForm()"><span v-show="!loading">Post it!</span><span v-show="loading">Posting... </span><div class="loader" v-show="loading"></div></button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
	export default {

		data() {
			return {
				postData: {
					title: null,
					url: null,
					image_url: null
				},
				loading: false,
				getTitleLoading: false
			}
		},

		created() {
			this.getAuth();
		},

		methods: {
			sendForm() {
				var resource = this.$resource('/api/posts');
				this.loading = true;
				resource.save({post: this.postData }).then(function (response) {
					console.log(response);
					this.loading = false;
					$('#share_story').modal('hide');
					this.posts.push(response.data);
				}, function (response) {
					console.log(response);
				});
			},

			getAuth() {
				this.$http.get('/api/auth').then(function(response) {
					this.$set('auth', response.data);
				});
			},

			getTitle() {
				this.getTitleLoading = true;
				this.$http.post('/api/get-title', {url: this.postData.url }).then(function(response) {
					console.log(response);
					this.$set('postData.title', response.data.title);
					this.$set('postData.image_url', response.data.image_url);
					this.getTitleLoading = false;

				}, function(response) {
					console.log(response);
				});

			}
		}
	}


</script>