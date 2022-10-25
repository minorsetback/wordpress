
import { html, css, LitElement } from 'https://cdn.jsdelivr.net/gh/lit/dist@2/core/lit-core.min.js';

class SimpleGreeting extends LitElement {
    static styles = css`
        .video-container { display: flex; flex-direction: column; }

        .thumbnail {
            position: relative;
            display: flex;
        }

        .thumbnail::before {
            content: attr(data-duration);
            position: absolute;
            background-color: rgba(0, 0, 0, 0.85);
            color: white;
            right: 5px;
            bottom: 5px;
            padding: 0.1em 0.3em;
            border-radius: 0.3em;
            font-size: 0.9rem;
        }

        .thumbnail-image {
            width: 100%;
            height: 100%;
            min-width: 250px;
            min-height: 150px;
            background-color: #aaa;
        }
        .thumbnail-image.shorts {
            width: 100%;
            height: 100%;
            min-width: 250px;
            min-height: 450px;
            background-color: #aaa;
        }
        .video-bottom-section {
            display: flex;
            align-items: flex-start;
            margin-top: 1rem;
        }

        .channel-icon {
            margin-right: 0.75rem;
            border-radius: 50%;
            width: 36px;
            height: 36px;
            background-color: #aaa;
        }

        .video-details {
            display: flex;
            flex-direction: column;
        }

        .video-title {
            font-size: 1.1rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            text-decoration: none;
            color: white;
        }

        .video-channel-name {
            margin-bottom: 0.1rem;
            text-decoration: none;
            transition: color 150ms;
        }

        .video-channel-name:hover {
            color: #111;
        }

        .video-channel-name,
        .video-metadata {
            color: #646464;
        }
    `;

    static properties = {
        title: { type: String },
        image: { type: String },
        user: { type: String },
        time: { type: String },
        views: { type: String },
        shorts: { type: String }
    };

    constructor() {
        super();
        this.name = 'Somebody';
    }

    render() {
        return html`
        <article class="video-container">
        <a href="#" class="thumbnail ${this.short}" data-duration="12:24">
            <img class="thumbnail-image ${this.short}" src=${this.image} />
        </a>
        <div class="video-bottom-section">
                <a href="#">
                    <img class="channel-icon" src="http://unsplash.it/36/36?gravity=center" />
                </a>
                <div class="video-details">
                    <a href="#" class="video-title">${this.title}</a>
                    <a href="#" class="video-channel-name">${this.user}</a>
                    <div class="video-metadata">
                        <span>${this.views}</span>
                        •
                        <span>${this.time}</span>
                    </div>
                </div>
            </div>
        </article>
        `;
    }
}
customElements.define('video-card', SimpleGreeting);