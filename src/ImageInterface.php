<?php

namespace Timber;

/**
 * Interface ImageInterface
 */
interface ImageInterface
{
    /**
     * Gets the relative path to an attachment.
     *
     * @api
     * @return string The relative path to an attachment.
     */
    public function path(): string;

    /**
     * Gets the caption of an attachment.
     *
     * @api
     * @since 2.0
     * @return string
     */
    public function caption(): string;

    /**
     * Gets filesize in a human-readable format.
     *
     * This can be useful if you want to display the human-readable filesize for a file. It’s
     * easier to read «16 KB» than «16555 bytes» or «1 MB» than «1048576 bytes».
     *
     * @api
     * @since 2.0.0
     * @return string|null The filesize string in a human-readable format or null if the
     *                    filesize can’t be read.
     */
    public function size(): ?string;

    /**
     * Gets filesize in bytes.
     *
     * @api
     * @since 2.0.0
     * @return int|false The filesize string in bytes, or false if the filesize can’t be read.
     */
    public function size_raw();

    /**
     * Gets the extension of the attached file.
     *
     * @api
     * @since 2.0.0
     * @return string|null An uppercase extension string.
     */
    public function extension(): ?string;

    /**
     * Gets the source URL for the image.
     *
     * @return string The src of the file.
     */
    public function __toString();

    /**
     * Gets the source URL for the image.
     *
     * You can use WordPress image sizes (including the ones you registered with your theme or
     * plugin) by passing the name of the size to this function (like `medium` or `large`). If the
     * WordPress size has not been generated, it will return an empty string.
     *
     * @api
     * @param string $size Optional. The requested image size. This can be a size that was in
     *                     WordPress. Example: `medium` or `large`. Default `full`.
     *
     * @return string|bool The src URL for the image.
     */
    public function src($size = 'full');

    /**
     * Gets the width of the image in pixels.
     *
     * @api
     * @return int The width of the image in pixels.
     */
    public function width();

    /**
     * Gets the height of the image in pixels.
     *
     * @api
     * @return int The height of the image in pixels.
     */
    public function height();

    /**
     * Gets the aspect ratio of the image.
     *
     * @api
     * @return float The aspect ratio of the image.
     */
    public function aspect();

    /**
     * Gets the alt text for an image.
     *
     * For better accessibility, you should always add an alt attribute to your images, even if it’s
     * empty.
     *
     * @api
     * @return string Alt text stored in WordPress.
     */
    public function alt(): string;
}