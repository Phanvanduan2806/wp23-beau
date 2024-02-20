class PostFetcher {
    constructor(selector) {
        this.selector = selector;
    }

    async fetchToAdmin(data) {
        try {
            if (!data.urls.length) return [];
            const ajaxUrl = "/wp-json/wp/v2/post-urls";
            const response = await jQuery.ajax({
                type: "POST",
                url: ajaxUrl,
                data,
            });
            return response;
        } catch (error) {
            console.error(error);
            throw error;
        }
    }

    getUniqueUrls() {
        const urls = Array.from(jQuery(this.selector + " .post-item a")).map(
            (link) => link.href
        );
        return [...new Set(urls)];
    }

    async fetch() {
        const urls = this.getUniqueUrls();
        return this.fetchToAdmin({
            urls
        });
    }
}
