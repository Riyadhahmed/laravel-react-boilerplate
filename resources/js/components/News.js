import React, {Component} from 'react';

export default class News extends Component {

    constructor() {
        super();
        this.state = {
            news: [{
                'id': 1,
                'title': "Test News",
                'description': "Test detail News"
            }]
        }
    }

    componentDidMount() {
        fetch('/api/news')
            .then(response => {
                return response.json();
            })
            .then(data => {
                this.setState({news: data});
            });
    }

    renderNews() {
        return this.state.news.map(data => {
            return (
                <li key={data.id}>
                    { data.title }
                </li>
            );
        })
    }


    render() {
        return (
            <div>
                <ul>
                    { this.renderNews() }
                </ul>
            </div>
        );
    }
}

