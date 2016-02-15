import React from 'react';
import Header from '../components/header.jsx'

const App = (props) => {
    return (
      <div>
        <Header />
        <div className="react-starterkit-content">
          {props.children}
        </div>
      </div>
    );
};

export default App;