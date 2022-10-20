class VideoCard extends HTMLElement {

    render() { // (1)
        let title = this.getAttribute('title');
        let image = this.getAttribute('image');
        let user = this.getAttribute('user');
        let time = this.getAttribute('time');
        let views = this.getAttribute('views');
        let short = this.getAttribute('short')
        let html = `
        <article class="video-container">
            <a href="#" class="thumbnail ${short}" data-duration="12:24">
                <img class="thumbnail-image ${short}" src=${image} />
            </a>
            <div class="video-bottom-section">
                <a href="#">
                    <img class="channel-icon" src="http://unsplash.it/36/36?gravity=center" />
                </a>
                <div class="video-details">
                    <a href="#" class="video-title">${title}</a>
                    <a href="#" class="video-channel-name">${user}</a>
                    <div class="video-metadata">
                        <span>${views}</span>
                        •
                        <span>${time}</span>
                    </div>
                </div>
            </div>
        </article>
    `
        this.innerHTML = html
    }

    connectedCallback() { // (2)
        if (!this.rendered) {
            this.render();
            this.rendered = true;
        }
    }

    static get observedAttributes() { // (3)
        return ['title', 'image', 'user', 'time', 'views', 'short'];
    }

}

customElements.define("video-card", VideoCard);