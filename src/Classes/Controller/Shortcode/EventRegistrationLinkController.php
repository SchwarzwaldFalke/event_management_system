<?php
/**
 * @author Christoph Bessei
 * @version
 */

namespace BIT\EMS\Controller\Shortcode;

use Fum_Conf;

class EventRegistrationLinkController extends AbstractShortcodeController
{
    public function printContent($atts = [], $content = null)
    {
        $eventID = (isset($atts["ID"]) && !empty($atts["ID"])) ? intval($atts["ID"]) : get_the_ID();
        $params = ['event' => "ID_" . $eventID];

        $eventRegistrationID = get_option(Fum_Conf::$fum_event_registration_page);
        $url = get_permalink($eventRegistrationID);
        $url = add_query_arg($params, $url);
        ?>
        <p><a href="<?php echo $url ?>">Hier gehts zur Anmeldung</a></p>
        <?php
    }
}