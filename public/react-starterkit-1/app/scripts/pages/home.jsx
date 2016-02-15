import React from 'react';
import ItemList from '../components/itemList.jsx';
import Example from '../components/buttonCSS.jsx';
import ItemStore from '../stores/itemStore';
import ItemActions from '../actions/itemActions';

class Home extends React.Component {
  
  constructor(props){
    super(props);
    this.state = {
      items : [],
      loading: false
    };
  }

  componentDidMount() {
    this.unsubscribe = ItemStore.listen(this.onStatusChange.bind(this));
    ItemActions.loadItems();
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
        <h1>About</h1>
		<hr/>
		<br/>
		<br/>
		<strong>TECHS USED TO BUILD THIS APP:</strong>
        <ItemList { ...this.state } />
		<Example />
      </div>
    );
  }
}

export default Home;