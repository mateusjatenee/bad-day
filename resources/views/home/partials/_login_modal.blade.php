<template id="share-s">
  <div id="share_story" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="gridModalLabel">Share a story</h4>
        </div>
        <div class="modal-body">
          <div class="container-fluid bd-example-row">
            <form v-on="submit: sendForm">
            <input type="hidden" value="{{ csrf_token() }}" v-model="postData._token">
              <fieldset class="form-group">
                <label for="formGroupExampleInput">Title</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Post title" v-model="postData.title">
              </fieldset>
              <fieldset class="form-group">
                <label for="formGroupExampleInput2">Content</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input" v-model="postData.content">
              </fieldset>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" @click="sendForm()">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</template>

<share-story></share-story>
