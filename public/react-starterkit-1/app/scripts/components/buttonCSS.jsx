import React from 'react';
import Barium from 'barium';

var styles = Barium.create({
  btn: {
    display: 'inline-block',
    color: '#000',
    padding: '6px 12px',
    marginBottom: '0',
    fontSize: '14px',
    fontWeight: 'normal',
    lineHeight: '1.428571429',
    textAlign: 'center',
    whiteSpace: 'nowrap',
    verticalAlign: 'middle',
    cursor: 'pointer',
    backgroundImage: 'none',
    border: '1px solid transparent',
    borderRadius: '4px',
    userSelect: 'none',

    ':hover': {
      color: '#fff'
    },
    // Try resizing the window!
    '@media (max-width: 500px)': {
      backgroundColor: '#5bc0de',
      borderColor: '#46b8da'
    }
  }
})

var Example = React.createClass({

    render: function() {
        return (
          <div>
            <button className={styles.btn}>Click Me</button>
          </div>
        );
    }
});

export default Example;    