<?php
namespace BIT\EMS\Settings\Tab;

/**
 * @author Christoph Bessei
 */
class EventManagerMailTab implements TabInterface
{
    const EVENT_REGISTRATION_SUCCESSFUL_SUBJECT = \Ems_Conf::PREFIX . 'event_registration_successful_subject';
    const EVENT_REGISTRATION_SUCCESSFUL_BODY = \Ems_Conf::PREFIX . 'event_registration_successful_body';

    const EVENT_CANCEL_REGISTRATION_SUBJECT = \Ems_Conf::PREFIX . 'event_cancel_registration_subject';
    const EVENT_CANCEL_REGISTRATION_BODY = \Ems_Conf::PREFIX . 'event_cancel_registration_body';

    public function getId(): string
    {
        return \Ems_Conf::PREFIX . 'event_manager_notifications';
    }

    public function getTitle(): string
    {
        return __('Event manager notifications', 'ems_text_domain');
    }

    public function getFields(): array
    {
        return [
            [
                'name' => \Ems_Conf::PREFIX . '1510694819',
                'desc' => '<h2>' . __('Registration successful mail', 'ems_text_domain') . '</h2>',
                'type' => 'html',
            ],
            [
                'name' => static::EVENT_REGISTRATION_SUCCESSFUL_SUBJECT,
                'label' => __('Subject', 'ems_text_domain'),
                'desc' => __('Available markers: <br>###user_firstname###<br>###event_title###', 'ems_text_domain'),
                'type' => 'text',
            ],
            [
                'name' => static::EVENT_REGISTRATION_SUCCESSFUL_BODY,
                'label' => __('Body', 'ems_text_domain'),
                'desc' => __('Available markers: <br>###user_firstname###<br>###event_title###', 'ems_text_domain'),
                'type' => 'mailWysiwig',
            ],

            [
                'name' => \Ems_Conf::PREFIX . '1510694839',
                'desc' => '<h2>' . __('Cancel registration mail', 'ems_text_domain') . '</h2>',
                'type' => 'html',

            ],
            [
                'name' => static::EVENT_CANCEL_REGISTRATION_SUBJECT,
                'label' => __('Subject', 'ems_text_domain'),
                'desc' => __('Available markers: <br>###user_firstname###<br>###event_title###', 'ems_text_domain'),
                'type' => 'text',
            ],
            [
                'name' => static::EVENT_CANCEL_REGISTRATION_BODY,
                'label' => __('Body', 'ems_text_domain'),
                'desc' => __('Available markers: <br>###user_firstname###<br>###event_title###', 'ems_text_domain'),
                'type' => 'mailWysiwig',
            ],
        ];
    }
}
