import React from 'react';
import { Link } from 'react-router';

const Header = (props) => {
  return (
    <header className="clearfix">
      React / Reflux / Ratchet / Laravel 5 Boilerplate
      <nav className="clearfix">
        <div className="nav-item">
          <Link to="about">About</Link>
        </div>
		<div className="nav-item">
          <Link to="resources">Resources</Link>
        </div>
        <div className="nav-item">
          <Link to="info">Info</Link>
        </div>
      </nav>
    </header>
  )
};

export default Header;