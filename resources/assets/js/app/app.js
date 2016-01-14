var Vue = require('vue');

Vue.use(require('vue-resource'));
Vue.http.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr('content');

import Posts from './components/Posts.vue';
import ShareStory from './components/ShareStory.vue';

new Vue({
	el: 'body',

	components: {
		Posts: Posts,
		Share: ShareStory
	}
});