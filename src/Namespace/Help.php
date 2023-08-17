<?php declare(strict_types=1);
/**
 * This file is automatic generated by build_docs.php file
 * and is used only for autocomplete in multiple IDE
 * don't modify manually.
 */

namespace danog\MadelineProto\Namespace;

interface Help
{
    /**
     * Returns current configuration, including data center configuration.
     *
     * @return array{_: 'config', test_mode: bool, default_p2p_contacts: bool, preload_featured_stickers: bool, revoke_pm_inbox: bool, blocked_mode: bool, force_try_ipv6: bool, date: int, expires: int, this_dc: int, dc_options: list<array{_: 'dcOption', ipv6: bool, media_only: bool, tcpo_only: bool, cdn: bool, static: bool, this_port_only: bool, id: int, ip_address: string, port: int, secret: string}>, dc_txt_domain_name: string, chat_size_max: int, megagroup_size_max: int, forwarded_count_max: int, online_update_period_ms: int, offline_blur_timeout_ms: int, offline_idle_timeout_ms: int, online_cloud_timeout_ms: int, notify_cloud_delay_ms: int, notify_default_delay_ms: int, push_chat_period_ms: int, push_chat_limit: int, edit_time_limit: int, revoke_time_limit: int, revoke_pm_time_limit: int, rating_e_decay: int, stickers_recent_limit: int, channels_read_media_period: int, tmp_sessions: int, call_receive_timeout_ms: int, call_ring_timeout_ms: int, call_connect_timeout_ms: int, call_packet_timeout_ms: int, me_url_prefix: string, autoupdate_url_prefix: string, gif_search_username: string, venue_search_username: string, img_search_username: string, static_maps_provider: string, caption_length_max: int, message_length_max: int, webfile_dc_id: int, suggested_lang_code: string, lang_pack_version: int, base_lang_pack_version: int, reactions_default?: array{_: 'reactionEmpty'}|array{_: 'reactionEmoji', emoticon: string}|array{_: 'reactionCustomEmoji', document_id: int}, autologin_token: string} @see https://docs.madelineproto.xyz/API_docs/types/Config.html
     */
    public function getConfig(): array;

    /**
     * Returns info on data center nearest to the user.
     *
     * @return array{_: 'nearestDc', country: string, this_dc: int, nearest_dc: int} @see https://docs.madelineproto.xyz/API_docs/types/NearestDc.html
     */
    public function getNearestDc(): array;

    /**
     * Returns information on update availability for the current application.
     *
     * @param string $source Source
     * @return array{_: 'help.appUpdate', can_not_skip: bool, id: int, version: string, text: string, entities: list<array{_: 'messageEntityUnknown', offset: int, length: int}|array{_: 'messageEntityMention', offset: int, length: int}|array{_: 'messageEntityHashtag', offset: int, length: int}|array{_: 'messageEntityBotCommand', offset: int, length: int}|array{_: 'messageEntityUrl', offset: int, length: int}|array{_: 'messageEntityEmail', offset: int, length: int}|array{_: 'messageEntityBold', offset: int, length: int}|array{_: 'messageEntityItalic', offset: int, length: int}|array{_: 'messageEntityCode', offset: int, length: int}|array{_: 'messageEntityPre', offset: int, length: int, language: string}|array{_: 'messageEntityTextUrl', offset: int, length: int, url: string}|array{_: 'messageEntityMentionName', offset: int, length: int, user_id: int}|array{_: 'inputMessageEntityMentionName', user_id: array|int|string, offset: int, length: int}|array{_: 'messageEntityPhone', offset: int, length: int}|array{_: 'messageEntityCashtag', offset: int, length: int}|array{_: 'messageEntityUnderline', offset: int, length: int}|array{_: 'messageEntityStrike', offset: int, length: int}|array{_: 'messageEntityBlockquote', offset: int, length: int}|array{_: 'messageEntityBankCard', offset: int, length: int}|array{_: 'messageEntitySpoiler', offset: int, length: int}|array{_: 'messageEntityCustomEmoji', offset: int, length: int, document_id: int}>, document?: array{_: 'documentEmpty', id: array}|array{_: 'document', id: array, access_hash: array, file_reference: array, date: array, mime_type: array, size: array, thumbs: list<array>, video_thumbs: list<array>, dc_id: array, attributes: list<array>}, url: string, sticker?: array{_: 'documentEmpty', id: array}|array{_: 'document', id: array, access_hash: array, file_reference: array, date: array, mime_type: array, size: array, thumbs: list<array>, video_thumbs: list<array>, dc_id: array, attributes: list<array>}}|array{_: 'help.noAppUpdate'} @see https://docs.madelineproto.xyz/API_docs/types/help.AppUpdate.html
     */
    public function getAppUpdate(string $source = ''): array;

    /**
     * Returns localized text of a text message with an invitation.
     *
     * @return array{_: 'help.inviteText', message: string} @see https://docs.madelineproto.xyz/API_docs/types/help.InviteText.html
     */
    public function getInviteText(): array;

    /**
     * Returns the support user for the "ask a question" feature.
     *
     * @return array{_: 'help.support', user: array|int|string, phone_number: string} @see https://docs.madelineproto.xyz/API_docs/types/help.Support.html
     */
    public function getSupport(): array;

    /**
     * Get changelog of current app.
     * Typically, an [updates](https://docs.madelineproto.xyz/API_docs/constructors/updates.html) constructor will be returned, containing one or more [updateServiceNotification](https://docs.madelineproto.xyz/API_docs/constructors/updateServiceNotification.html) updates with app-specific changelogs.
     *
     * @param string $prev_app_version Previous app version
     * @return array @see https://docs.madelineproto.xyz/API_docs/types/Updates.html
     */
    public function getAppChangelog(string $prev_app_version = ''): array;

    /**
     * Informs the server about the number of pending bot updates if they haven't been processed for a long time; for bots only.
     *
     * @param int $pending_updates_count Number of pending updates
     * @param string $message Error message, if present
     */
    public function setBotUpdatesStatus(int $pending_updates_count = 0, string $message = ''): bool;

    /**
     * Get configuration for [CDN](https://core.telegram.org/cdn) file downloads.
     *
     * @return array{_: 'cdnConfig', public_keys: list<array{_: 'cdnPublicKey', dc_id: int, public_key: string}>} @see https://docs.madelineproto.xyz/API_docs/types/CdnConfig.html
     */
    public function getCdnConfig(): array;

    /**
     * Get recently used `t.me` links.
     *
     * When installing official applications from "Download Telegram" buttons present in [t.me](https://t.me) pages, a referral parameter is passed to applications after installation.
     * If, after downloading the application, the user creates a new account (instead of logging into an existing one), the referral parameter should be imported using this method, which returns the [t.me](https://t.me) pages the user recently opened, before installing Telegram.
     *
     * @param string $referer Referrer
     * @return array{_: 'help.recentMeUrls', urls: list<array{_: 'recentMeUrlUnknown', url: string}|array{_: 'recentMeUrlUser', url: string, user_id: int}|array{_: 'recentMeUrlChat', chat_id: array|int|string, url: string}|array{_: 'recentMeUrlChatInvite', chat_invite: array{_: 'chatInviteAlready', chat: array|int|string}|array{_: 'chatInvite', photo: array{_: 'photoEmpty', id: array}|array{_: 'photo', has_stickers: array, id: array, access_hash: array, file_reference: array, date: array, sizes: list<array>, video_sizes: list<array>, dc_id: array}, channel: bool, broadcast: bool, public: bool, megagroup: bool, request_needed: bool, title: string, about: string, participants_count: int, participants: list<array|int|string>}|array{_: 'chatInvitePeek', chat: array|int|string, expires: int}, url: string}|array{_: 'recentMeUrlStickerSet', set: array{_: 'stickerSetCovered', set: array{_: 'stickerSet', archived: bool, official: bool, masks: bool, animated: bool, videos: bool, emojis: bool, installed_date: int, id: int, access_hash: int, title: string, short_name: string, thumbs: list<array{_: 'photoSizeEmpty', type: string}|array{_: 'photoSize', type: string, w: int, h: int, size: int}|array{_: 'photoCachedSize', type: string, w: int, h: int, bytes: string}|array{_: 'photoStrippedSize', type: string, bytes: string}|array{_: 'photoSizeProgressive', type: string, w: int, h: int, sizes: list<int>}|array{_: 'photoPathSize', type: string, bytes: string}|array{_: 'photoSize', location: array{_: 'fileLocationUnavailable', volume_id: array, local_id: array, secret: array}|array{_: 'fileLocation', dc_id: array, volume_id: array, local_id: array, secret: array}, type: string, w: int, h: int, size: int}|array{_: 'photoCachedSize', location: array{_: 'fileLocationUnavailable', volume_id: array, local_id: array, secret: array}|array{_: 'fileLocation', dc_id: array, volume_id: array, local_id: array, secret: array}, type: string, w: int, h: int, bytes: string}>, thumb_dc_id: int, thumb_version: int, thumb_document_id: int, count: int, hash: int}, cover: array{_: 'documentEmpty', id: array}|array{_: 'document', id: array, access_hash: array, file_reference: array, date: array, mime_type: array, size: array, thumbs: list<array>, video_thumbs: list<array>, dc_id: array, attributes: list<array>}}|array{_: 'stickerSetMultiCovered', set: array{_: 'stickerSet', archived: bool, official: bool, masks: bool, animated: bool, videos: bool, emojis: bool, installed_date: int, id: int, access_hash: int, title: string, short_name: string, thumbs: list<array{_: 'photoSizeEmpty', type: string}|array{_: 'photoSize', type: string, w: int, h: int, size: int}|array{_: 'photoCachedSize', type: string, w: int, h: int, bytes: string}|array{_: 'photoStrippedSize', type: string, bytes: string}|array{_: 'photoSizeProgressive', type: string, w: int, h: int, sizes: list<int>}|array{_: 'photoPathSize', type: string, bytes: string}|array{_: 'photoSize', location: array{_: 'fileLocationUnavailable', volume_id: array, local_id: array, secret: array}|array{_: 'fileLocation', dc_id: array, volume_id: array, local_id: array, secret: array}, type: string, w: int, h: int, size: int}|array{_: 'photoCachedSize', location: array{_: 'fileLocationUnavailable', volume_id: array, local_id: array, secret: array}|array{_: 'fileLocation', dc_id: array, volume_id: array, local_id: array, secret: array}, type: string, w: int, h: int, bytes: string}>, thumb_dc_id: int, thumb_version: int, thumb_document_id: int, count: int, hash: int}, covers: list<array{_: 'documentEmpty', id: array}|array{_: 'document', id: array, access_hash: array, file_reference: array, date: array, mime_type: array, size: array, thumbs: list<array>, video_thumbs: list<array>, dc_id: array, attributes: list<array>}>}|array{_: 'stickerSetFullCovered', set: array{_: 'stickerSet', archived: bool, official: bool, masks: bool, animated: bool, videos: bool, emojis: bool, installed_date: int, id: int, access_hash: int, title: string, short_name: string, thumbs: list<array{_: 'photoSizeEmpty', type: string}|array{_: 'photoSize', type: string, w: int, h: int, size: int}|array{_: 'photoCachedSize', type: string, w: int, h: int, bytes: string}|array{_: 'photoStrippedSize', type: string, bytes: string}|array{_: 'photoSizeProgressive', type: string, w: int, h: int, sizes: list<int>}|array{_: 'photoPathSize', type: string, bytes: string}|array{_: 'photoSize', location: array{_: 'fileLocationUnavailable', volume_id: array, local_id: array, secret: array}|array{_: 'fileLocation', dc_id: array, volume_id: array, local_id: array, secret: array}, type: string, w: int, h: int, size: int}|array{_: 'photoCachedSize', location: array{_: 'fileLocationUnavailable', volume_id: array, local_id: array, secret: array}|array{_: 'fileLocation', dc_id: array, volume_id: array, local_id: array, secret: array}, type: string, w: int, h: int, bytes: string}>, thumb_dc_id: int, thumb_version: int, thumb_document_id: int, count: int, hash: int}, packs: list<array{_: 'stickerPack', emoticon: string, documents: list<int>}>, keywords: list<array{_: 'stickerKeyword', document_id: int, keyword: list<string>}>, documents: list<array{_: 'documentEmpty', id: array}|array{_: 'document', id: array, access_hash: array, file_reference: array, date: array, mime_type: array, size: array, thumbs: list<array>, video_thumbs: list<array>, dc_id: array, attributes: list<array>}>}|array{_: 'stickerSetNoCovered', set: array{_: 'stickerSet', archived: bool, official: bool, masks: bool, animated: bool, videos: bool, emojis: bool, installed_date: int, id: int, access_hash: int, title: string, short_name: string, thumbs: list<array{_: 'photoSizeEmpty', type: string}|array{_: 'photoSize', type: string, w: int, h: int, size: int}|array{_: 'photoCachedSize', type: string, w: int, h: int, bytes: string}|array{_: 'photoStrippedSize', type: string, bytes: string}|array{_: 'photoSizeProgressive', type: string, w: int, h: int, sizes: list<int>}|array{_: 'photoPathSize', type: string, bytes: string}|array{_: 'photoSize', location: array{_: 'fileLocationUnavailable', volume_id: array, local_id: array, secret: array}|array{_: 'fileLocation', dc_id: array, volume_id: array, local_id: array, secret: array}, type: string, w: int, h: int, size: int}|array{_: 'photoCachedSize', location: array{_: 'fileLocationUnavailable', volume_id: array, local_id: array, secret: array}|array{_: 'fileLocation', dc_id: array, volume_id: array, local_id: array, secret: array}, type: string, w: int, h: int, bytes: string}>, thumb_dc_id: int, thumb_version: int, thumb_document_id: int, count: int, hash: int}}, url: string}>, chats: list<array|int|string>, users: list<array|int|string>} @see https://docs.madelineproto.xyz/API_docs/types/help.RecentMeUrls.html
     */
    public function getRecentMeUrls(string $referer = ''): array;

    /**
     * Look for updates of telegram's terms of service.
     *
     * @return array{_: 'help.termsOfServiceUpdateEmpty', expires: int}|array{_: 'help.termsOfServiceUpdate', terms_of_service: array{_: 'help.termsOfService', id: mixed, popup: bool, text: string, entities: list<array{_: 'messageEntityUnknown', offset: int, length: int}|array{_: 'messageEntityMention', offset: int, length: int}|array{_: 'messageEntityHashtag', offset: int, length: int}|array{_: 'messageEntityBotCommand', offset: int, length: int}|array{_: 'messageEntityUrl', offset: int, length: int}|array{_: 'messageEntityEmail', offset: int, length: int}|array{_: 'messageEntityBold', offset: int, length: int}|array{_: 'messageEntityItalic', offset: int, length: int}|array{_: 'messageEntityCode', offset: int, length: int}|array{_: 'messageEntityPre', offset: int, length: int, language: string}|array{_: 'messageEntityTextUrl', offset: int, length: int, url: string}|array{_: 'messageEntityMentionName', offset: int, length: int, user_id: int}|array{_: 'inputMessageEntityMentionName', user_id: array|int|string, offset: int, length: int}|array{_: 'messageEntityPhone', offset: int, length: int}|array{_: 'messageEntityCashtag', offset: int, length: int}|array{_: 'messageEntityUnderline', offset: int, length: int}|array{_: 'messageEntityStrike', offset: int, length: int}|array{_: 'messageEntityBlockquote', offset: int, length: int}|array{_: 'messageEntityBankCard', offset: int, length: int}|array{_: 'messageEntitySpoiler', offset: int, length: int}|array{_: 'messageEntityCustomEmoji', offset: int, length: int, document_id: int}>, min_age_confirm: int}, expires: int} @see https://docs.madelineproto.xyz/API_docs/types/help.TermsOfServiceUpdate.html
     */
    public function getTermsOfServiceUpdate(): array;

    /**
     * Accept the new terms of service.
     *
     * @param mixed $id Any JSON-encodable data
     */
    public function acceptTermsOfService(mixed $id): bool;

    /**
     * Get info about an unsupported deep link, see [here for more info »](https://core.telegram.org/api/links#unsupported-links).
     *
     * @param string $path Path component of a `tg:` link
     * @return array{_: 'help.deepLinkInfoEmpty'}|array{_: 'help.deepLinkInfo', update_app: bool, message: string, entities: list<array{_: 'messageEntityUnknown', offset: int, length: int}|array{_: 'messageEntityMention', offset: int, length: int}|array{_: 'messageEntityHashtag', offset: int, length: int}|array{_: 'messageEntityBotCommand', offset: int, length: int}|array{_: 'messageEntityUrl', offset: int, length: int}|array{_: 'messageEntityEmail', offset: int, length: int}|array{_: 'messageEntityBold', offset: int, length: int}|array{_: 'messageEntityItalic', offset: int, length: int}|array{_: 'messageEntityCode', offset: int, length: int}|array{_: 'messageEntityPre', offset: int, length: int, language: string}|array{_: 'messageEntityTextUrl', offset: int, length: int, url: string}|array{_: 'messageEntityMentionName', offset: int, length: int, user_id: int}|array{_: 'inputMessageEntityMentionName', user_id: array|int|string, offset: int, length: int}|array{_: 'messageEntityPhone', offset: int, length: int}|array{_: 'messageEntityCashtag', offset: int, length: int}|array{_: 'messageEntityUnderline', offset: int, length: int}|array{_: 'messageEntityStrike', offset: int, length: int}|array{_: 'messageEntityBlockquote', offset: int, length: int}|array{_: 'messageEntityBankCard', offset: int, length: int}|array{_: 'messageEntitySpoiler', offset: int, length: int}|array{_: 'messageEntityCustomEmoji', offset: int, length: int, document_id: int}>} @see https://docs.madelineproto.xyz/API_docs/types/help.DeepLinkInfo.html
     */
    public function getDeepLinkInfo(string $path = ''): array;

    /**
     * Get app-specific configuration, see [client configuration](https://core.telegram.org/api/config#client-configuration) for more info on the result.
     *
     * @return array{_: 'help.appConfigNotModified'}|array{_: 'help.appConfig', config: mixed, hash: int} @see https://docs.madelineproto.xyz/API_docs/types/help.AppConfig.html
     */
    public function getAppConfig(int $hash = 0): array;

    /**
     * Saves logs of application on the server.
     *
     * @param list<array{_: 'inputAppEvent', time: float, data: mixed, type?: string, peer?: int}>|array<never, never> $events Array of List of input events @see https://docs.madelineproto.xyz/API_docs/types/InputAppEvent.html
     */
    public function saveAppLog(array $events = []): bool;

    /**
     * Get [passport](https://core.telegram.org/passport) configuration.
     *
     * @return array{_: 'help.passportConfigNotModified'}|array{_: 'help.passportConfig', countries_langs: mixed, hash: int} @see https://docs.madelineproto.xyz/API_docs/types/help.PassportConfig.html
     */
    public function getPassportConfig(int $hash = 0): array;

    /**
     * Get localized name of the telegram support user.
     *
     * @return array{_: 'help.supportName', name: string} @see https://docs.madelineproto.xyz/API_docs/types/help.SupportName.html
     */
    public function getSupportName(): array;

    /**
     * Can only be used by TSF members to obtain internal information.
     *
     * @param array|int|string $user_id User ID @see https://docs.madelineproto.xyz/API_docs/types/InputUser.html
     * @return array{_: 'help.userInfoEmpty'}|array{_: 'help.userInfo', message: string, entities: list<array{_: 'messageEntityUnknown', offset: int, length: int}|array{_: 'messageEntityMention', offset: int, length: int}|array{_: 'messageEntityHashtag', offset: int, length: int}|array{_: 'messageEntityBotCommand', offset: int, length: int}|array{_: 'messageEntityUrl', offset: int, length: int}|array{_: 'messageEntityEmail', offset: int, length: int}|array{_: 'messageEntityBold', offset: int, length: int}|array{_: 'messageEntityItalic', offset: int, length: int}|array{_: 'messageEntityCode', offset: int, length: int}|array{_: 'messageEntityPre', offset: int, length: int, language: string}|array{_: 'messageEntityTextUrl', offset: int, length: int, url: string}|array{_: 'messageEntityMentionName', offset: int, length: int, user_id: int}|array{_: 'inputMessageEntityMentionName', user_id: array|int|string, offset: int, length: int}|array{_: 'messageEntityPhone', offset: int, length: int}|array{_: 'messageEntityCashtag', offset: int, length: int}|array{_: 'messageEntityUnderline', offset: int, length: int}|array{_: 'messageEntityStrike', offset: int, length: int}|array{_: 'messageEntityBlockquote', offset: int, length: int}|array{_: 'messageEntityBankCard', offset: int, length: int}|array{_: 'messageEntitySpoiler', offset: int, length: int}|array{_: 'messageEntityCustomEmoji', offset: int, length: int, document_id: int}>, author: string, date: int} @see https://docs.madelineproto.xyz/API_docs/types/help.UserInfo.html
     */
    public function getUserInfo(array|int|string $user_id): array;

    /**
     * Internal use.
     *
     * @param array|int|string $user_id User @see https://docs.madelineproto.xyz/API_docs/types/InputUser.html
     * @param string $message Message
     * @param list<array{_: 'messageEntityUnknown', offset?: int, length?: int}|array{_: 'messageEntityMention', offset?: int, length?: int}|array{_: 'messageEntityHashtag', offset?: int, length?: int}|array{_: 'messageEntityBotCommand', offset?: int, length?: int}|array{_: 'messageEntityUrl', offset?: int, length?: int}|array{_: 'messageEntityEmail', offset?: int, length?: int}|array{_: 'messageEntityBold', offset?: int, length?: int}|array{_: 'messageEntityItalic', offset?: int, length?: int}|array{_: 'messageEntityCode', offset?: int, length?: int}|array{_: 'messageEntityPre', offset?: int, length?: int, language?: string}|array{_: 'messageEntityTextUrl', offset?: int, length?: int, url?: string}|array{_: 'messageEntityMentionName', offset?: int, length?: int, user_id?: int}|array{_: 'inputMessageEntityMentionName', user_id: array|int|string, offset?: int, length?: int}|array{_: 'messageEntityPhone', offset?: int, length?: int}|array{_: 'messageEntityCashtag', offset?: int, length?: int}|array{_: 'messageEntityUnderline', offset?: int, length?: int}|array{_: 'messageEntityStrike', offset?: int, length?: int}|array{_: 'messageEntityBlockquote', offset?: int, length?: int}|array{_: 'messageEntityBankCard', offset?: int, length?: int}|array{_: 'messageEntitySpoiler', offset?: int, length?: int}|array{_: 'messageEntityCustomEmoji', offset?: int, length?: int, document_id?: int}>|array<never, never> $entities Array of [Message entities for styled text](https://core.telegram.org/api/entities) @see https://docs.madelineproto.xyz/API_docs/types/MessageEntity.html
     * @param \danog\MadelineProto\ParseMode $parse_mode Whether to parse HTML or Markdown markup in the message
     * @return array{_: 'help.userInfoEmpty'}|array{_: 'help.userInfo', message: string, entities: list<array{_: 'messageEntityUnknown', offset: int, length: int}|array{_: 'messageEntityMention', offset: int, length: int}|array{_: 'messageEntityHashtag', offset: int, length: int}|array{_: 'messageEntityBotCommand', offset: int, length: int}|array{_: 'messageEntityUrl', offset: int, length: int}|array{_: 'messageEntityEmail', offset: int, length: int}|array{_: 'messageEntityBold', offset: int, length: int}|array{_: 'messageEntityItalic', offset: int, length: int}|array{_: 'messageEntityCode', offset: int, length: int}|array{_: 'messageEntityPre', offset: int, length: int, language: string}|array{_: 'messageEntityTextUrl', offset: int, length: int, url: string}|array{_: 'messageEntityMentionName', offset: int, length: int, user_id: int}|array{_: 'inputMessageEntityMentionName', user_id: array|int|string, offset: int, length: int}|array{_: 'messageEntityPhone', offset: int, length: int}|array{_: 'messageEntityCashtag', offset: int, length: int}|array{_: 'messageEntityUnderline', offset: int, length: int}|array{_: 'messageEntityStrike', offset: int, length: int}|array{_: 'messageEntityBlockquote', offset: int, length: int}|array{_: 'messageEntityBankCard', offset: int, length: int}|array{_: 'messageEntitySpoiler', offset: int, length: int}|array{_: 'messageEntityCustomEmoji', offset: int, length: int, document_id: int}>, author: string, date: int} @see https://docs.madelineproto.xyz/API_docs/types/help.UserInfo.html
     */
    public function editUserInfo(array|int|string $user_id, string $message = '', array $entities = [], \danog\MadelineProto\ParseMode $parse_mode = \danog\MadelineProto\ParseMode::TEXT): array;

    /**
     * Get MTProxy/Public Service Announcement information.
     *
     * @return array{_: 'help.promoDataEmpty', expires: int}|array{_: 'help.promoData', peer: array|int|string, proxy: bool, expires: int, chats: list<array|int|string>, users: list<array|int|string>, psa_type: string, psa_message: string} @see https://docs.madelineproto.xyz/API_docs/types/help.PromoData.html
     */
    public function getPromoData(): array;

    /**
     * Hide MTProxy/Public Service Announcement information.
     *
     * @param array|int|string $peer Peer to hide @see https://docs.madelineproto.xyz/API_docs/types/InputPeer.html
     */
    public function hidePromoData(array|int|string $peer): bool;

    /**
     * Dismiss a [suggestion, see here for more info »](https://core.telegram.org/api/config#suggestions).
     *
     * @param array|int|string $peer In the case of pending suggestions in [channels](https://docs.madelineproto.xyz/API_docs/constructors/channelFull.html), the channel ID. @see https://docs.madelineproto.xyz/API_docs/types/InputPeer.html
     * @param string $suggestion [Suggestion, see here for more info »](https://core.telegram.org/api/config#suggestions).
     */
    public function dismissSuggestion(array|int|string $peer, string $suggestion = ''): bool;

    /**
     * Get name, ISO code, localized name and phone codes/patterns of all available countries.
     *
     * @param string $lang_code Language code of the current user
     * @return array{_: 'help.countriesListNotModified'}|array{_: 'help.countriesList', countries: list<array{_: 'help.country', hidden: bool, iso2: string, default_name: string, name: string, country_codes: list<array{_: 'help.countryCode', country_code: string, prefixes: list<string>, patterns: list<string>}>}>, hash: int} @see https://docs.madelineproto.xyz/API_docs/types/help.CountriesList.html
     */
    public function getCountriesList(string $lang_code = '', int $hash = 0): array;

    /**
     * Get Telegram Premium promotion information.
     *
     * @return array{_: 'help.premiumPromo', status_text: string, status_entities: list<array{_: 'messageEntityUnknown', offset: int, length: int}|array{_: 'messageEntityMention', offset: int, length: int}|array{_: 'messageEntityHashtag', offset: int, length: int}|array{_: 'messageEntityBotCommand', offset: int, length: int}|array{_: 'messageEntityUrl', offset: int, length: int}|array{_: 'messageEntityEmail', offset: int, length: int}|array{_: 'messageEntityBold', offset: int, length: int}|array{_: 'messageEntityItalic', offset: int, length: int}|array{_: 'messageEntityCode', offset: int, length: int}|array{_: 'messageEntityPre', offset: int, length: int, language: string}|array{_: 'messageEntityTextUrl', offset: int, length: int, url: string}|array{_: 'messageEntityMentionName', offset: int, length: int, user_id: int}|array{_: 'inputMessageEntityMentionName', user_id: array|int|string, offset: int, length: int}|array{_: 'messageEntityPhone', offset: int, length: int}|array{_: 'messageEntityCashtag', offset: int, length: int}|array{_: 'messageEntityUnderline', offset: int, length: int}|array{_: 'messageEntityStrike', offset: int, length: int}|array{_: 'messageEntityBlockquote', offset: int, length: int}|array{_: 'messageEntityBankCard', offset: int, length: int}|array{_: 'messageEntitySpoiler', offset: int, length: int}|array{_: 'messageEntityCustomEmoji', offset: int, length: int, document_id: int}>, video_sections: list<string>, videos: list<array{_: 'documentEmpty', id: array}|array{_: 'document', id: array, access_hash: array, file_reference: array, date: array, mime_type: array, size: array, thumbs: list<array>, video_thumbs: list<array>, dc_id: array, attributes: list<array>}>, period_options: list<array{_: 'premiumSubscriptionOption', current: bool, can_purchase_upgrade: bool, transaction: string, months: int, currency: string, amount: int, bot_url: string, store_product: string}>, users: list<array|int|string>} @see https://docs.madelineproto.xyz/API_docs/types/help.PremiumPromo.html
     */
    public function getPremiumPromo(): array;
}
