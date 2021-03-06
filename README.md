# AMP for WP - Disable Sanitizer

[AMP for WP](https://wordpress.org/plugins/accelerated-mobile-pages/) WordPress plugin strips forms out of the DOM and thus prevents certain plugins from functioning. [Rate my Post](https://wordpress.org/plugins/rate-my-post/) plugin is AMP-compatible but it does require a form in the DOM.

This plugin prevent AMP for WP plugin from stripping forms out of the DOM and must be installed if you want to use Rate my Post on AMP pages generated by the AMP for WP plugin.

## Installation

1. Unzip downloaded archive
2. Create an empty folder named amp-for-wp-disable-sanitizer in your /wp-content/plugins/ directory
3. Upload the unzipped archive in the amp-for-wp-disable-sanitizer folder
3. Navigate to Dashboard -> Plugins
4. Click Activate
5. Enable AMP compatibility mode in Rate my Post

## Author

* **Blaz Krapez** - [BlazzDev](https://blazzdev.com/)

## License

This project is licensed under the GPLv3 License - see the [LICENSE.md](LICENSE.md) file for details
