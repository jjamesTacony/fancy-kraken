import React from 'react';
import { Router, Route, IndexRoute } from 'react-router';
import createHistory from 'history/lib/createHashHistory'

import App from './pages/app.jsx';
import Home from './pages/home.jsx';
import Info from './pages/info.jsx';
import ResourceLinks from './pages/resource_links.jsx';
import NotFound from './pages/notFound.jsx';

const historyOptions = {
  queryKey : false
};

const routes = (
  <Router history={createHistory(historyOptions)}>
    <Route path='/' component={ App }>
      <IndexRoute component={ Home }/>
      <Route path='info' component={ Info } />
	  <Route path='resources' component={ ResourceLinks } />
      <Route path='about' component={ Home } />
      <Route path='*' component={NotFound}/>
    </Route>
  </Router>
);

export default routes;