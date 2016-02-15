import React from 'react';
import ItemList from '../components/itemList.jsx';
import ResourceLinksStaticBlock from '../components/resourceLinksStaticBlock.jsx';
import ResourceLinksStore from '../stores/resourceLinksStore';
import ResourceLinksActions from '../actions/resourceLinksActions';

class ResourceLinks extends React.Component {

	  constructor(props){
		super(props);
		this.state = {
		  items : [],
		  loading: false
		};
	  }

	componentDidMount() {
		this.unsubscribe = ResourceLinksStore.listen(this.onStatusChange.bind(this));
		ResourceLinksActions.loadItems();
	  }

	  componentWillUnmount() {
		this.unsubscribe();
	  }

	  onStatusChange(state) {
		this.setState(state);
	  }

  render() {
    return (
      <div>
        <h1>Resources - Links</h1>
		<hr/>
		<br/>
		<br/>
		<strong>ALL THE REACT I AM GOING TO PLAY WITH:</strong>
        <ItemList { ...this.state } />
		<hr/>
		<ResourceLinksStaticBlock />
      </div>
    );
  }
}
export default ResourceLinks;