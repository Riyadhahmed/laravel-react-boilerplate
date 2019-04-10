import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import News from './News'

export default class Main extends Component {
    render() {
        return (
            <News/>
        );
    }
}

if (document.getElementById('app')) {
    ReactDOM.render(<Main />, document.getElementById('app'));
}
