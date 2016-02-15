import Reflux from 'reflux';

const ResourceLinkActions = Reflux.createActions({
  'loadItems': {children: ['completed', 'failed']}
});

ResourceLinkActions.loadItems.listen(function(){
  // make your api call/ async stuff here
  // we use setTimeout for faking async behaviour here
  setTimeout(() => {
    const items = [	'https://browsersync.io/ - sync devices and test on all devices<br/>', 
					'http://reactcss.com/', 
					'http://madscript.com/barium/'
				];
    this.completed(items);

    // on error
    // this.failed('an error occured');
  }, 500);
});

export default ResourceLinkActions;
