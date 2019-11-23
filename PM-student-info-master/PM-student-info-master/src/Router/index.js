import App from '../App';
import Teacher from '../Teacher/Teacher'
import React from 'react';
import {Router,Route,Switch} from 'react-router-dom';
import {createHashHistory} from 'history'
const history = createHashHistory()

class RouterConfig extends React.Component{
    render(){
        return(
            <Router history={history}>
                <Switch>
                    <Route path="/" exact component={App} />
                    <Route path="/teacher" component={Teacher} />
                </Switch>
            </Router>
        )
    }
}
export default RouterConfig;