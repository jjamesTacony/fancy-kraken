import Reflux from 'reflux';
import ResourceLinksActions from '../actions/resourceLinksActions';

let ResourceLinksStore = Reflux.createStore({
  listenables: ResourceLinksActions,
  
  init() {
    this.items = [];
  },

  loadItems() {
    this.trigger({ 
      loading: true
    });
  },

  loadItemsCompleted(items) {
    this.items = items;
    this.trigger({ 
      items : this.items,
      loading: false
    });
  },

  loadItemsFailed(error) {
    this.trigger({ 
      error : error,
      loading: false
    });
  }

});

export default ResourceLinksStore;