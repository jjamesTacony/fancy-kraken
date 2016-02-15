import Reflux from 'reflux';

const ItemActions = Reflux.createActions({
  'loadItems': {children: ['completed', 'failed']}
});

ItemActions.loadItems.listen(function(){
  // make your api call/ async stuff here
  // we use setTimeout for faking async behaviour here
  setTimeout(() => {
    const items = [	'React-Router', 
					'Reflux', 
					'Jest',
					'Barium',
					'Webpack',
					'Gulp',
					'Sass',
					'EcmaScript 6 Standards',
					'Babel',
					'Stylus',
					'Ratchet',
					'Laravel 5'
					
				];
    this.completed(items);

    // on error
    // this.failed('an error occured');
  }, 500);
});

export default ItemActions;