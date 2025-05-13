<?php
/**
 * Generated stub declarations for WooCommerce.
 * @see https://woocommerce.com
 * @see https://github.com/tectalic/woocommerce-stubs
 */

namespace {
    /**
     * Class ActionScheduler_ActionClaim
     */
    class ActionScheduler_ActionClaim
    {
        /**
         * Claim ID.
         *
         * @var string
         */
        private $id = '';
        /**
         * Claimed action IDs.
         *
         * @var int[]
         */
        private $action_ids = array();
        /**
         * Construct.
         *
         * @param string $id Claim ID.
         * @param int[]  $action_ids Action IDs.
         */
        public function __construct($id, array $action_ids)
        {
        }
        /**
         * Get claim ID.
         */
        public function get_id()
        {
        }
        /**
         * Get IDs of claimed actions.
         */
        public function get_actions()
        {
        }
    }
    /**
     * Class ActionScheduler_ActionFactory
     */
    class ActionScheduler_ActionFactory
    {
        /**
         * Return stored actions for given params.
         *
         * @param string                        $status The action's status in the data store.
         * @param string                        $hook The hook to trigger when this action runs.
         * @param array                         $args Args to pass to callbacks when the hook is triggered.
         * @param ActionScheduler_Schedule|null $schedule The action's schedule.
         * @param string                        $group A group to put the action in.
         * phpcs:ignore Squiz.Commenting.FunctionComment.ExtraParamComment
         * @param int                           $priority The action priority.
         *
         * @return ActionScheduler_Action An instance of the stored action.
         */
        public function get_stored_action($status, $hook, array $args = array(), ?\ActionScheduler_Schedule $schedule = \null, $group = '')
        {
        }
        /**
         * Enqueue an action to run one time, as soon as possible (rather a specific scheduled time).
         *
         * This method creates a new action using the NullSchedule. In practice, this results in an action scheduled to
         * execute "now". Therefore, it will generally run as soon as possible but is not prioritized ahead of other actions
         * that are already past-due.
         *
         * @param string $hook The hook to trigger when this action runs.
         * @param array  $args Args to pass when the hook is triggered.
         * @param string $group A group to put the action in.
         *
         * @return int The ID of the stored action.
         */
        public function async($hook, $args = array(), $group = '')
        {
        }
        /**
         * Same as async, but also supports $unique param.
         *
         * @param string $hook The hook to trigger when this action runs.
         * @param array  $args Args to pass when the hook is triggered.
         * @param string $group A group to put the action in.
         * @param bool   $unique Whether to ensure the action is unique.
         *
         * @return int The ID of the stored action.
         */
        public function async_unique($hook, $args = array(), $group = '', $unique = \true)
        {
        }
        /**
         * Create single action.
         *
         * @param string $hook  The hook to trigger when this action runs.
         * @param array  $args  Args to pass when the hook is triggered.
         * @param int    $when  Unix timestamp when the action will run.
         * @param string $group A group to put the action in.
         *
         * @return int The ID of the stored action.
         */
        public function single($hook, $args = array(), $when = \null, $group = '')
        {
        }
        /**
         * Create single action only if there is no pending or running action with same name and params.
         *
         * @param string $hook The hook to trigger when this action runs.
         * @param array  $args Args to pass when the hook is triggered.
         * @param int    $when Unix timestamp when the action will run.
         * @param string $group A group to put the action in.
         * @param bool   $unique Whether action scheduled should be unique.
         *
         * @return int The ID of the stored action.
         */
        public function single_unique($hook, $args = array(), $when = \null, $group = '', $unique = \true)
        {
        }
        /**
         * Create the first instance of an action recurring on a given interval.
         *
         * @param string $hook The hook to trigger when this action runs.
         * @param array  $args Args to pass when the hook is triggered.
         * @param int    $first Unix timestamp for the first run.
         * @param int    $interval Seconds between runs.
         * @param string $group A group to put the action in.
         *
         * @return int The ID of the stored action.
         */
        public function recurring($hook, $args = array(), $first = \null, $interval = \null, $group = '')
        {
        }
        /**
         * Create the first instance of an action recurring on a given interval only if there is no pending or running action with same name and params.
         *
         * @param string $hook The hook to trigger when this action runs.
         * @param array  $args Args to pass when the hook is triggered.
         * @param int    $first Unix timestamp for the first run.
         * @param int    $interval Seconds between runs.
         * @param string $group A group to put the action in.
         * @param bool   $unique Whether action scheduled should be unique.
         *
         * @return int The ID of the stored action.
         */
        public function recurring_unique($hook, $args = array(), $first = \null, $interval = \null, $group = '', $unique = \true)
        {
        }
        /**
         * Create the first instance of an action recurring on a Cron schedule.
         *
         * @param string $hook The hook to trigger when this action runs.
         * @param array  $args Args to pass when the hook is triggered.
         * @param int    $base_timestamp The first instance of the action will be scheduled
         *        to run at a time calculated after this timestamp matching the cron
         *        expression. This can be used to delay the first instance of the action.
         * @param int    $schedule A cron definition string.
         * @param string $group A group to put the action in.
         *
         * @return int The ID of the stored action.
         */
        public function cron($hook, $args = array(), $base_timestamp = \null, $schedule = \null, $group = '')
        {
        }
        /**
         * Create the first instance of an action recurring on a Cron schedule only if there is no pending or running action with same name and params.
         *
         * @param string $hook The hook to trigger when this action runs.
         * @param array  $args Args to pass when the hook is triggered.
         * @param int    $base_timestamp The first instance of the action will be scheduled
         *        to run at a time calculated after this timestamp matching the cron
         *        expression. This can be used to delay the first instance of the action.
         * @param int    $schedule A cron definition string.
         * @param string $group A group to put the action in.
         * @param bool   $unique Whether action scheduled should be unique.
         *
         * @return int The ID of the stored action.
         **/
        public function cron_unique($hook, $args = array(), $base_timestamp = \null, $schedule = \null, $group = '', $unique = \true)
        {
        }
        /**
         * Create a successive instance of a recurring or cron action.
         *
         * Importantly, the action will be rescheduled to run based on the current date/time.
         * That means when the action is scheduled to run in the past, the next scheduled date
         * will be pushed forward. For example, if a recurring action set to run every hour
         * was scheduled to run 5 seconds ago, it will be next scheduled for 1 hour in the
         * future, which is 1 hour and 5 seconds from when it was last scheduled to run.
         *
         * Alternatively, if the action is scheduled to run in the future, and is run early,
         * likely via manual intervention, then its schedule will change based on the time now.
         * For example, if a recurring action set to run every day, and is run 12 hours early,
         * it will run again in 24 hours, not 36 hours.
         *
         * This slippage is less of an issue with Cron actions, as the specific run time can
         * be set for them to run, e.g. 1am each day. In those cases, and entire period would
         * need to be missed before there was any change is scheduled, e.g. in the case of an
         * action scheduled for 1am each day, the action would need to run an entire day late.
         *
         * @param ActionScheduler_Action $action The existing action.
         *
         * @return string The ID of the stored action
         * @throws InvalidArgumentException If $action is not a recurring action.
         */
        public function repeat($action)
        {
        }
        /**
         * Creates a scheduled action.
         *
         * This general purpose method can be used in place of specific methods such as async(),
         * async_unique(), single() or single_unique(), etc.
         *
         * @internal Not intended for public use, should not be overridden by subclasses.
         *
         * @param array $options {
         *     Describes the action we wish to schedule.
         *
         *     @type string     $type      Must be one of 'async', 'cron', 'recurring', or 'single'.
         *     @type string     $hook      The hook to be executed.
         *     @type array      $arguments Arguments to be passed to the callback.
         *     @type string     $group     The action group.
         *     @type bool       $unique    If the action should be unique.
         *     @type int        $when      Timestamp. Indicates when the action, or first instance of the action in the case
         *                                 of recurring or cron actions, becomes due.
         *     @type int|string $pattern   Recurrence pattern. This is either an interval in seconds for recurring actions
         *                                 or a cron expression for cron actions.
         *     @type int        $priority  Lower values means higher priority. Should be in the range 0-255.
         * }
         *
         * @return int The action ID. Zero if there was an error scheduling the action.
         */
        public function create(array $options = array())
        {
        }
        /**
         * Save action to database.
         *
         * @param ActionScheduler_Action $action Action object to save.
         *
         * @return int The ID of the stored action
         */
        protected function store(\ActionScheduler_Action $action)
        {
        }
        /**
         * Store action if it's unique.
         *
         * @param ActionScheduler_Action $action Action object to store.
         *
         * @return int ID of the created action. Will be 0 if action was not created.
         */
        protected function store_unique_action(\ActionScheduler_Action $action)
        {
        }
    }
    /**
     * Class ActionScheduler_AdminView_Deprecated
     *
     * Store deprecated public functions previously found in the ActionScheduler_AdminView class.
     * Keeps them out of the way of the main class.
     *
     * @codeCoverageIgnore
     */
    class ActionScheduler_AdminView_Deprecated
    {
        /**
         * Adjust parameters for custom post type.
         *
         * @param array $args Args.
         */
        public function action_scheduler_post_type_args($args)
        {
        }
        /**
         * Customise the post status related views displayed on the Scheduled Actions administration screen.
         *
         * @param array $views An associative array of views and view labels which can be used to filter the 'scheduled-action' posts displayed on the Scheduled Actions administration screen.
         * @return array $views An associative array of views and view labels which can be used to filter the 'scheduled-action' posts displayed on the Scheduled Actions administration screen.
         */
        public function list_table_views($views)
        {
        }
        /**
         * Do not include the "Edit" action for the Scheduled Actions administration screen.
         *
         * Hooked to the 'bulk_actions-edit-action-scheduler' filter.
         *
         * @param array $actions An associative array of actions which can be performed on the 'scheduled-action' post type.
         * @return array $actions An associative array of actions which can be performed on the 'scheduled-action' post type.
         */
        public function bulk_actions($actions)
        {
        }
        /**
         * Completely customer the columns displayed on the Scheduled Actions administration screen.
         *
         * Because we can't filter the content of the default title and date columns, we need to recreate our own
         * custom columns for displaying those post fields. For the column content, @see self::list_table_column_content().
         *
         * @param array $columns An associative array of columns that are use for the table on the Scheduled Actions administration screen.
         * @return array $columns An associative array of columns that are use for the table on the Scheduled Actions administration screen.
         */
        public function list_table_columns($columns)
        {
        }
        /**
         * Make our custom title & date columns use defaulting title & date sorting.
         *
         * @param array $columns An associative array of columns that can be used to sort the table on the Scheduled Actions administration screen.
         * @return array $columns An associative array of columns that can be used to sort the table on the Scheduled Actions administration screen.
         */
        public static function list_table_sortable_columns($columns)
        {
        }
        /**
         * Print the content for our custom columns.
         *
         * @param string $column_name The key for the column for which we should output our content.
         * @param int    $post_id The ID of the 'scheduled-action' post for which this row relates.
         */
        public static function list_table_column_content($column_name, $post_id)
        {
        }
        /**
         * Hide the inline "Edit" action for all 'scheduled-action' posts.
         *
         * Hooked to the 'post_row_actions' filter.
         *
         * @param array   $actions An associative array of actions which can be performed on the 'scheduled-action' post type.
         * @param WP_Post $post The 'scheduled-action' post object.
         * @return array $actions An associative array of actions which can be performed on the 'scheduled-action' post type.
         */
        public static function row_actions($actions, $post)
        {
        }
        /**
         * Run an action when triggered from the Action Scheduler administration screen.
         *
         * @codeCoverageIgnore
         */
        public static function maybe_execute_action()
        {
        }
        /**
         * Convert an interval of seconds into a two part human friendly string.
         *
         * The WordPress human_time_diff() function only calculates the time difference to one degree, meaning
         * even if an action is 1 day and 11 hours away, it will display "1 day". This function goes one step
         * further to display two degrees of accuracy.
         *
         * Based on Crontrol::interval() function by Edward Dale: https://wordpress.org/plugins/wp-crontrol/
         *
         * @return void
         */
        public static function admin_notices()
        {
        }
        /**
         * Filter search queries to allow searching by Claim ID (i.e. post_password).
         *
         * @param string   $orderby MySQL orderby string.
         * @param WP_Query $query Instance of a WP_Query object.
         * @return void
         */
        public function custom_orderby($orderby, $query)
        {
        }
        /**
         * Filter search queries to allow searching by Claim ID (i.e. post_password).
         *
         * @param string   $search MySQL search string.
         * @param WP_Query $query Instance of a WP_Query object.
         * @return void
         */
        public function search_post_password($search, $query)
        {
        }
        /**
         * Change messages when a scheduled action is updated.
         *
         * @param  array $messages Messages.
         * @return array
         */
        public function post_updated_messages($messages)
        {
        }
    }
    /**
     * Class ActionScheduler_AdminView
     *
     * @codeCoverageIgnore
     */
    class ActionScheduler_AdminView extends \ActionScheduler_AdminView_Deprecated
    {
        /**
         * Instance.
         *
         * @var null|self
         */
        private static $admin_view = \null;
        /**
         * Screen ID.
         *
         * @var string
         */
        private static $screen_id = 'tools_page_action-scheduler';
        /**
         * ActionScheduler_ListTable instance.
         *
         * @var ActionScheduler_ListTable
         */
        protected $list_table;
        /**
         * Get instance.
         *
         * @return ActionScheduler_AdminView
         * @codeCoverageIgnore
         */
        public static function instance()
        {
        }
        /**
         * Initialize.
         *
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
        /**
         * Print system status report.
         */
        public function system_status_report()
        {
        }
        /**
         * Registers action-scheduler into WooCommerce > System status.
         *
         * @param array $tabs An associative array of tab key => label.
         * @return array $tabs An associative array of tab key => label, including Action Scheduler's tabs
         */
        public function register_system_status_tab(array $tabs)
        {
        }
        /**
         * Include Action Scheduler's administration under the Tools menu.
         *
         * A menu under the Tools menu is important for backward compatibility (as that's
         * where it started), and also provides more convenient access than the WooCommerce
         * System Status page, and for sites where WooCommerce isn't active.
         */
        public function register_menu()
        {
        }
        /**
         * Triggers processing of any pending actions.
         */
        public function process_admin_ui()
        {
        }
        /**
         * Renders the Admin UI
         */
        public function render_admin_ui()
        {
        }
        /**
         * Get the admin UI object and process any requested actions.
         *
         * @return ActionScheduler_ListTable
         */
        protected function get_list_table()
        {
        }
        /**
         * Action: admin_notices
         *
         * Maybe check past-due actions, and print notice.
         *
         * @uses $this->check_pastdue_actions()
         */
        public function maybe_check_pastdue_actions()
        {
        }
        /**
         * Check past-due actions, and print notice.
         */
        protected function check_pastdue_actions()
        {
        }
        /**
         * Provide more information about the screen and its data in the help tab.
         */
        public function add_help_tabs()
        {
        }
    }
    /**
     * Abstract WP_Async_Request class.
     *
     * @abstract
     */
    abstract class WP_Async_Request
    {
        /**
         * Prefix
         *
         * (default value: 'wp')
         *
         * @var string
         */
        protected $prefix = 'wp';
        /**
         * Action
         *
         * (default value: 'async_request')
         *
         * @var string
         */
        protected $action = 'async_request';
        /**
         * Identifier
         *
         * @var mixed
         */
        protected $identifier;
        /**
         * Data
         *
         * (default value: array())
         *
         * @var array
         */
        protected $data = array();
        /**
         * Initiate new async request
         */
        public function __construct()
        {
        }
        /**
         * Set data used during the request
         *
         * @param array $data Data.
         *
         * @return $this
         */
        public function data($data)
        {
        }
        /**
         * Dispatch the async request
         *
         * @return array|WP_Error
         */
        public function dispatch()
        {
        }
        /**
         * Get query args
         *
         * @return array
         */
        protected function get_query_args()
        {
        }
        /**
         * Get query URL
         *
         * @return string
         */
        protected function get_query_url()
        {
        }
        /**
         * Get post args
         *
         * @return array
         */
        protected function get_post_args()
        {
        }
        /**
         * Maybe handle
         *
         * Check for correct nonce and pass to handler.
         */
        public function maybe_handle()
        {
        }
        /**
         * Handle
         *
         * Override this method to perform any actions required
         * during the async request.
         */
        abstract protected function handle();
    }
    /**
     * ActionScheduler_AsyncRequest_QueueRunner class.
     */
    class ActionScheduler_AsyncRequest_QueueRunner extends \WP_Async_Request
    {
        /**
         * Data store for querying actions
         *
         * @var ActionScheduler_Store
         */
        protected $store;
        /**
         * Prefix for ajax hooks
         *
         * @var string
         */
        protected $prefix = 'as';
        /**
         * Action for ajax hooks
         *
         * @var string
         */
        protected $action = 'async_request_queue_runner';
        /**
         * Initiate new async request.
         *
         * @param ActionScheduler_Store $store Store object.
         */
        public function __construct(\ActionScheduler_Store $store)
        {
        }
        /**
         * Handle async requests
         *
         * Run a queue, and maybe dispatch another async request to run another queue
         * if there are still pending actions after completing a queue in this request.
         */
        protected function handle()
        {
        }
        /**
         * If the async request runner is needed and allowed to run, dispatch a request.
         */
        public function maybe_dispatch()
        {
        }
        /**
         * Only allow async requests when needed.
         *
         * Also allow 3rd party code to disable running actions via async requests.
         */
        protected function allow()
        {
        }
        /**
         * Chaining async requests can crash MySQL. A brief sleep call in PHP prevents that.
         */
        protected function get_sleep_seconds()
        {
        }
    }
    /**
     * Class ActionScheduler_Compatibility
     */
    class ActionScheduler_Compatibility
    {
        /**
         * Converts a shorthand byte value to an integer byte value.
         *
         * Wrapper for wp_convert_hr_to_bytes(), moved to load.php in WordPress 4.6 from media.php
         *
         * @link https://secure.php.net/manual/en/function.ini-get.php
         * @link https://secure.php.net/manual/en/faq.using.php#faq.using.shorthandbytes
         *
         * @param string $value A (PHP ini) byte value, either shorthand or ordinary.
         * @return int An integer byte value.
         */
        public static function convert_hr_to_bytes($value)
        {
        }
        /**
         * Attempts to raise the PHP memory limit for memory intensive processes.
         *
         * Only allows raising the existing limit and prevents lowering it.
         *
         * Wrapper for wp_raise_memory_limit(), added in WordPress v4.6.0
         *
         * @return bool|int|string The limit that was set or false on failure.
         */
        public static function raise_memory_limit()
        {
        }
        /**
         * Attempts to raise the PHP timeout for time intensive processes.
         *
         * Only allows raising the existing limit and prevents lowering it. Wrapper for wc_set_time_limit(), when available.
         *
         * @param int $limit The time limit in seconds.
         */
        public static function raise_time_limit($limit = 0)
        {
        }
    }
    /**
     * Class ActionScheduler_DataController
     *
     * The main plugin/initialization class for the data stores.
     *
     * Responsible for hooking everything up with WordPress.
     *
     * @package Action_Scheduler
     *
     * @since 3.0.0
     */
    class ActionScheduler_DataController
    {
        /** Action data store class name. */
        const DATASTORE_CLASS = 'ActionScheduler_DBStore';
        /** Logger data store class name. */
        const LOGGER_CLASS = 'ActionScheduler_DBLogger';
        /** Migration status option name. */
        const STATUS_FLAG = 'action_scheduler_migration_status';
        /** Migration status option value. */
        const STATUS_COMPLETE = 'complete';
        /** Migration minimum required PHP version. */
        const MIN_PHP_VERSION = '5.5';
        /**
         * Instance.
         *
         * @var ActionScheduler_DataController
         */
        private static $instance;
        /**
         * Sleep time in seconds.
         *
         * @var int
         */
        private static $sleep_time = 0;
        /**
         * Tick count required for freeing memory.
         *
         * @var int
         */
        private static $free_ticks = 50;
        /**
         * Get a flag indicating whether the migration environment dependencies are met.
         *
         * @return bool
         */
        public static function dependencies_met()
        {
        }
        /**
         * Get a flag indicating whether the migration is complete.
         *
         * @return bool Whether the flag has been set marking the migration as complete
         */
        public static function is_migration_complete()
        {
        }
        /**
         * Mark the migration as complete.
         */
        public static function mark_migration_complete()
        {
        }
        /**
         * Unmark migration when a plugin is de-activated. Will not work in case of silent activation, for example in an update.
         * We do this to mitigate the bug of lost actions which happens if there was an AS 2.x to AS 3.x migration in the past, but that plugin is now
         * deactivated and the site was running on AS 2.x again.
         */
        public static function mark_migration_incomplete()
        {
        }
        /**
         * Set the action store class name.
         *
         * @param string $class Classname of the store class.
         *
         * @return string
         */
        public static function set_store_class($class)
        {
        }
        /**
         * Set the action logger class name.
         *
         * @param string $class Classname of the logger class.
         *
         * @return string
         */
        public static function set_logger_class($class)
        {
        }
        /**
         * Set the sleep time in seconds.
         *
         * @param integer $sleep_time The number of seconds to pause before resuming operation.
         */
        public static function set_sleep_time($sleep_time)
        {
        }
        /**
         * Set the tick count required for freeing memory.
         *
         * @param integer $free_ticks The number of ticks to free memory on.
         */
        public static function set_free_ticks($free_ticks)
        {
        }
        /**
         * Free memory if conditions are met.
         *
         * @param int $ticks Current tick count.
         */
        public static function maybe_free_memory($ticks)
        {
        }
        /**
         * Reduce memory footprint by clearing the database query and object caches.
         */
        public static function free_memory()
        {
        }
        /**
         * Connect to table datastores if migration is complete.
         * Otherwise, proceed with the migration if the dependencies have been met.
         */
        public static function init()
        {
        }
        /**
         * Singleton factory.
         */
        public static function instance()
        {
        }
    }
    /**
     * ActionScheduler DateTime class.
     *
     * This is a custom extension to DateTime that
     */
    class ActionScheduler_DateTime extends \DateTime
    {
        /**
         * UTC offset.
         *
         * Only used when a timezone is not set. When a timezone string is
         * used, this will be set to 0.
         *
         * @var int
         */
        protected $utcOffset = 0;
        // phpcs:ignore WordPress.NamingConventions.ValidVariableName.PropertyNotSnakeCase
        /**
         * Get the unix timestamp of the current object.
         *
         * Missing in PHP 5.2 so just here so it can be supported consistently.
         *
         * @return int
         */
        #[\ReturnTypeWillChange]
        public function getTimestamp()
        {
        }
        /**
         * Set the UTC offset.
         *
         * This represents a fixed offset instead of a timezone setting.
         *
         * @param string|int $offset UTC offset value.
         */
        public function setUtcOffset($offset)
        {
        }
        /**
         * Returns the timezone offset.
         *
         * @return int
         * @link http://php.net/manual/en/datetime.getoffset.php
         */
        #[\ReturnTypeWillChange]
        public function getOffset()
        {
        }
        /**
         * Set the TimeZone associated with the DateTime
         *
         * @param DateTimeZone $timezone Timezone object.
         *
         * @return static
         * @link http://php.net/manual/en/datetime.settimezone.php
         */
        #[\ReturnTypeWillChange]
        public function setTimezone($timezone)
        {
        }
        /**
         * Get the timestamp with the WordPress timezone offset added or subtracted.
         *
         * @since  3.0.0
         * @return int
         */
        public function getOffsetTimestamp()
        {
        }
    }
    /**
     * ActionScheduler Exception Interface.
     *
     * Facilitates catching Exceptions unique to Action Scheduler.
     *
     * @package ActionScheduler
     * @since 2.1.0
     */
    interface ActionScheduler_Exception
    {
    }
    /**
     * Class ActionScheduler_FatalErrorMonitor
     */
    class ActionScheduler_FatalErrorMonitor
    {
        /**
         * ActionScheduler_ActionClaim instance.
         *
         * @var ActionScheduler_ActionClaim
         */
        private $claim = \null;
        /**
         * ActionScheduler_Store instance.
         *
         * @var ActionScheduler_Store
         */
        private $store = \null;
        /**
         * Current action's ID.
         *
         * @var int
         */
        private $action_id = 0;
        /**
         * Construct.
         *
         * @param ActionScheduler_Store $store Action store.
         */
        public function __construct(\ActionScheduler_Store $store)
        {
        }
        /**
         * Start monitoring.
         *
         * @param ActionScheduler_ActionClaim $claim Claimed actions.
         */
        public function attach(\ActionScheduler_ActionClaim $claim)
        {
        }
        /**
         * Stop monitoring.
         */
        public function detach()
        {
        }
        /**
         * Track specified action.
         *
         * @param int $action_id Action ID to track.
         */
        public function track_current_action($action_id)
        {
        }
        /**
         * Un-track action.
         */
        public function untrack_action()
        {
        }
        /**
         * Handle unexpected shutdown.
         */
        public function handle_unexpected_shutdown()
        {
        }
    }
    /**
     * InvalidAction Exception.
     *
     * Used for identifying actions that are invalid in some way.
     *
     * @package ActionScheduler
     */
    class ActionScheduler_InvalidActionException extends \InvalidArgumentException implements \ActionScheduler_Exception
    {
        /**
         * Create a new exception when the action's schedule cannot be fetched.
         *
         * @param string $action_id The action ID with bad args.
         * @param mixed  $schedule  Passed schedule.
         * @return static
         */
        public static function from_schedule($action_id, $schedule)
        {
        }
        /**
         * Create a new exception when the action's args cannot be decoded to an array.
         *
         * @param string $action_id The action ID with bad args.
         * @param mixed  $args      Passed arguments.
         * @return static
         */
        public static function from_decoding_args($action_id, $args = array())
        {
        }
    }
    /**
     * Action Scheduler Abstract List Table class
     *
     * This abstract class enhances WP_List_Table making it ready to use.
     *
     * By extending this class we can focus on describing how our table looks like,
     * which columns needs to be shown, filter, ordered by and more and forget about the details.
     *
     * This class supports:
     *  - Bulk actions
     *  - Search
     *  - Sortable columns
     *  - Automatic translations of the columns
     *
     * @codeCoverageIgnore
     * @since  2.0.0
     */
    abstract class ActionScheduler_Abstract_ListTable extends \WP_List_Table
    {
        /**
         * The table name
         *
         * @var string
         */
        protected $table_name;
        /**
         * Package name, used to get options from WP_List_Table::get_items_per_page.
         *
         * @var string
         */
        protected $package;
        /**
         * How many items do we render per page?
         *
         * @var int
         */
        protected $items_per_page = 10;
        /**
         * Enables search in this table listing. If this array
         * is empty it means the listing is not searchable.
         *
         * @var array
         */
        protected $search_by = array();
        /**
         * Columns to show in the table listing. It is a key => value pair. The
         * key must much the table column name and the value is the label, which is
         * automatically translated.
         *
         * @var array
         */
        protected $columns = array();
        /**
         * Defines the row-actions. It expects an array where the key
         * is the column name and the value is an array of actions.
         *
         * The array of actions are key => value, where key is the method name
         * (with the prefix row_action_<key>) and the value is the label
         * and title.
         *
         * @var array
         */
        protected $row_actions = array();
        /**
         * The Primary key of our table
         *
         * @var string
         */
        protected $ID = 'ID';
        /**
         * Enables sorting, it expects an array
         * of columns (the column names are the values)
         *
         * @var array
         */
        protected $sort_by = array();
        /**
         * The default sort order
         *
         * @var string
         */
        protected $filter_by = array();
        /**
         * The status name => count combinations for this table's items. Used to display status filters.
         *
         * @var array
         */
        protected $status_counts = array();
        /**
         * Notices to display when loading the table. Array of arrays of form array( 'class' => {updated|error}, 'message' => 'This is the notice text display.' ).
         *
         * @var array
         */
        protected $admin_notices = array();
        /**
         * Localised string displayed in the <h1> element above the able.
         *
         * @var string
         */
        protected $table_header;
        /**
         * Enables bulk actions. It must be an array where the key is the action name
         * and the value is the label (which is translated automatically). It is important
         * to notice that it will check that the method exists (`bulk_$name`) and will throw
         * an exception if it does not exists.
         *
         * This class will automatically check if the current request has a bulk action, will do the
         * validations and afterwards will execute the bulk method, with two arguments. The first argument
         * is the array with primary keys, the second argument is a string with a list of the primary keys,
         * escaped and ready to use (with `IN`).
         *
         * @var array
         */
        protected $bulk_actions = array();
        /**
         * Makes translation easier, it basically just wraps
         * `_x` with some default (the package name).
         *
         * @param string $text The new text to translate.
         * @param string $context The context of the text.
         * @return string|void The translated text.
         *
         * @deprecated 3.0.0 Use `_x()` instead.
         */
        protected function translate($text, $context = '')
        {
        }
        /**
         * Reads `$this->bulk_actions` and returns an array that WP_List_Table understands. It
         * also validates that the bulk method handler exists. It throws an exception because
         * this is a library meant for developers and missing a bulk method is a development-time error.
         *
         * @return array
         *
         * @throws RuntimeException Throws RuntimeException when the bulk action does not have a callback method.
         */
        protected function get_bulk_actions()
        {
        }
        /**
         * Checks if the current request has a bulk action. If that is the case it will validate and will
         * execute the bulk method handler. Regardless if the action is valid or not it will redirect to
         * the previous page removing the current arguments that makes this request a bulk action.
         */
        protected function process_bulk_action()
        {
        }
        /**
         * Default code for deleting entries.
         * validated already by process_bulk_action()
         *
         * @param array  $ids ids of the items to delete.
         * @param string $ids_sql the sql for the ids.
         * @return void
         */
        protected function bulk_delete(array $ids, $ids_sql)
        {
        }
        /**
         * Prepares the _column_headers property which is used by WP_Table_List at rendering.
         * It merges the columns and the sortable columns.
         */
        protected function prepare_column_headers()
        {
        }
        /**
         * Reads $this->sort_by and returns the columns name in a format that WP_Table_List
         * expects
         */
        public function get_sortable_columns()
        {
        }
        /**
         * Returns the columns names for rendering. It adds a checkbox for selecting everything
         * as the first column
         */
        public function get_columns()
        {
        }
        /**
         * Get prepared LIMIT clause for items query
         *
         * @global wpdb $wpdb
         *
         * @return string Prepared LIMIT clause for items query.
         */
        protected function get_items_query_limit()
        {
        }
        /**
         * Returns the number of items to offset/skip for this current view.
         *
         * @return int
         */
        protected function get_items_offset()
        {
        }
        /**
         * Get prepared OFFSET clause for items query
         *
         * @global wpdb $wpdb
         *
         * @return string Prepared OFFSET clause for items query.
         */
        protected function get_items_query_offset()
        {
        }
        /**
         * Prepares the ORDER BY sql statement. It uses `$this->sort_by` to know which
         * columns are sortable. This requests validates the orderby $_GET parameter is a valid
         * column and sortable. It will also use order (ASC|DESC) using DESC by default.
         */
        protected function get_items_query_order()
        {
        }
        /**
         * Querystring arguments to persist between form submissions.
         *
         * @since 3.7.3
         *
         * @return string[]
         */
        protected function get_request_query_args_to_persist()
        {
        }
        /**
         * Return the sortable column specified for this request to order the results by, if any.
         *
         * @return string
         */
        protected function get_request_orderby()
        {
        }
        /**
         * Return the sortable column order specified for this request.
         *
         * @return string
         */
        protected function get_request_order()
        {
        }
        /**
         * Return the status filter for this request, if any.
         *
         * @return string
         */
        protected function get_request_status()
        {
        }
        /**
         * Return the search filter for this request, if any.
         *
         * @return string
         */
        protected function get_request_search_query()
        {
        }
        /**
         * Process and return the columns name. This is meant for using with SQL, this means it
         * always includes the primary key.
         *
         * @return array
         */
        protected function get_table_columns()
        {
        }
        /**
         * Check if the current request is doing a "full text" search. If that is the case
         * prepares the SQL to search texts using LIKE.
         *
         * If the current request does not have any search or if this list table does not support
         * that feature it will return an empty string.
         *
         * @return string
         */
        protected function get_items_query_search()
        {
        }
        /**
         * Prepares the SQL to filter rows by the options defined at `$this->filter_by`. Before trusting
         * any data sent by the user it validates that it is a valid option.
         */
        protected function get_items_query_filters()
        {
        }
        /**
         * Prepares the data to feed WP_Table_List.
         *
         * This has the core for selecting, sorting and filtering data. To keep the code simple
         * its logic is split among many methods (get_items_query_*).
         *
         * Beside populating the items this function will also count all the records that matches
         * the filtering criteria and will do fill the pagination variables.
         */
        public function prepare_items()
        {
        }
        /**
         * Display the table.
         *
         * @param string $which The name of the table.
         */
        public function extra_tablenav($which)
        {
        }
        /**
         * Set the data for displaying. It will attempt to unserialize (There is a chance that some columns
         * are serialized). This can be override in child classes for further data transformation.
         *
         * @param array $items Items array.
         */
        protected function set_items(array $items)
        {
        }
        /**
         * Renders the checkbox for each row, this is the first column and it is named ID regardless
         * of how the primary key is named (to keep the code simpler). The bulk actions will do the proper
         * name transformation though using `$this->ID`.
         *
         * @param array $row The row to render.
         */
        public function column_cb($row)
        {
        }
        /**
         * Renders the row-actions.
         *
         * This method renders the action menu, it reads the definition from the $row_actions property,
         * and it checks that the row action method exists before rendering it.
         *
         * @param array  $row Row to be rendered.
         * @param string $column_name Column name.
         * @return string
         */
        protected function maybe_render_actions($row, $column_name)
        {
        }
        /**
         * Process the bulk actions.
         *
         * @return void
         */
        protected function process_row_actions()
        {
        }
        /**
         * Default column formatting, it will escape everything for security.
         *
         * @param array  $item The item array.
         * @param string $column_name Column name to display.
         *
         * @return string
         */
        public function column_default($item, $column_name)
        {
        }
        /**
         * Display the table heading and search query, if any
         */
        protected function display_header()
        {
        }
        /**
         * Display the table heading and search query, if any
         */
        protected function display_admin_notices()
        {
        }
        /**
         * Prints the available statuses so the user can click to filter.
         */
        protected function display_filter_by_status()
        {
        }
        /**
         * Renders the table list, we override the original class to render the table inside a form
         * and to render any needed HTML (like the search box). By doing so the callee of a function can simple
         * forget about any extra HTML.
         */
        protected function display_table()
        {
        }
        /**
         * Process any pending actions.
         */
        public function process_actions()
        {
        }
        /**
         * Render the list table page, including header, notices, status filters and table.
         */
        public function display_page()
        {
        }
        /**
         * Get the text to display in the search box on the list table.
         */
        protected function get_search_box_placeholder()
        {
        }
        /**
         * Gets the screen per_page option name.
         *
         * @return string
         */
        protected function get_per_page_option_name()
        {
        }
    }
    /**
     * Implements the admin view of the actions.
     *
     * @codeCoverageIgnore
     */
    class ActionScheduler_ListTable extends \ActionScheduler_Abstract_ListTable
    {
        /**
         * The package name.
         *
         * @var string
         */
        protected $package = 'action-scheduler';
        /**
         * Columns to show (name => label).
         *
         * @var array
         */
        protected $columns = array();
        /**
         * Actions (name => label).
         *
         * @var array
         */
        protected $row_actions = array();
        /**
         * The active data stores
         *
         * @var ActionScheduler_Store
         */
        protected $store;
        /**
         * A logger to use for getting action logs to display
         *
         * @var ActionScheduler_Logger
         */
        protected $logger;
        /**
         * A ActionScheduler_QueueRunner runner instance (or child class)
         *
         * @var ActionScheduler_QueueRunner
         */
        protected $runner;
        /**
         * Bulk actions. The key of the array is the method name of the implementation.
         * Example: bulk_<key>(array $ids, string $sql_in).
         *
         * See the comments in the parent class for further details
         *
         * @var array
         */
        protected $bulk_actions = array();
        /**
         * Flag variable to render our notifications, if any, once.
         *
         * @var bool
         */
        protected static $did_notification = \false;
        /**
         * Array of seconds for common time periods, like week or month, alongside an internationalised string representation, i.e. "Day" or "Days"
         *
         * @var array
         */
        private static $time_periods;
        /**
         * Sets the current data store object into `store->action` and initialises the object.
         *
         * @param ActionScheduler_Store       $store Store object.
         * @param ActionScheduler_Logger      $logger Logger object.
         * @param ActionScheduler_QueueRunner $runner Runner object.
         */
        public function __construct(\ActionScheduler_Store $store, \ActionScheduler_Logger $logger, \ActionScheduler_QueueRunner $runner)
        {
        }
        /**
         * Handles setting the items_per_page option for this screen.
         *
         * @param mixed  $status Default false (to skip saving the current option).
         * @param string $option Screen option name.
         * @param int    $value  Screen option value.
         * @return int
         */
        public function set_items_per_page_option($status, $option, $value)
        {
        }
        /**
         * Convert an interval of seconds into a two part human friendly string.
         *
         * The WordPress human_time_diff() function only calculates the time difference to one degree, meaning
         * even if an action is 1 day and 11 hours away, it will display "1 day". This function goes one step
         * further to display two degrees of accuracy.
         *
         * Inspired by the Crontrol::interval() function by Edward Dale: https://wordpress.org/plugins/wp-crontrol/
         *
         * @param int $interval A interval in seconds.
         * @param int $periods_to_include Depth of time periods to include, e.g. for an interval of 70, and $periods_to_include of 2, both minutes and seconds would be included. With a value of 1, only minutes would be included.
         * @return string A human friendly string representation of the interval.
         */
        private static function human_interval($interval, $periods_to_include = 2)
        {
        }
        /**
         * Returns the recurrence of an action or 'Non-repeating'. The output is human readable.
         *
         * @param ActionScheduler_Action $action Action object.
         *
         * @return string
         */
        protected function get_recurrence($action)
        {
        }
        /**
         * Serializes the argument of an action to render it in a human friendly format.
         *
         * @param array $row The array representation of the current row of the table.
         *
         * @return string
         */
        public function column_args(array $row)
        {
        }
        /**
         * Prints the logs entries inline. We do so to avoid loading Javascript and other hacks to show it in a modal.
         *
         * @param array $row Action array.
         * @return string
         */
        public function column_log_entries(array $row)
        {
        }
        /**
         * Prints the logs entries inline. We do so to avoid loading Javascript and other hacks to show it in a modal.
         *
         * @param ActionScheduler_LogEntry $log_entry Log entry object.
         * @param DateTimezone             $timezone Timestamp.
         * @return string
         */
        protected function get_log_entry_html(\ActionScheduler_LogEntry $log_entry, \DateTimezone $timezone)
        {
        }
        /**
         * Only display row actions for pending actions.
         *
         * @param array  $row         Row to render.
         * @param string $column_name Current row.
         *
         * @return string
         */
        protected function maybe_render_actions($row, $column_name)
        {
        }
        /**
         * Renders admin notifications
         *
         * Notifications:
         *  1. When the maximum number of tasks are being executed simultaneously.
         *  2. Notifications when a task is manually executed.
         *  3. Tables are missing.
         */
        public function display_admin_notices()
        {
        }
        /**
         * Prints the scheduled date in a human friendly format.
         *
         * @param array $row The array representation of the current row of the table.
         *
         * @return string
         */
        public function column_schedule($row)
        {
        }
        /**
         * Get the scheduled date in a human friendly format.
         *
         * @param ActionScheduler_Schedule $schedule Action's schedule.
         * @return string
         */
        protected function get_schedule_display_string(\ActionScheduler_Schedule $schedule)
        {
        }
        /**
         * Bulk delete.
         *
         * Deletes actions based on their ID. This is the handler for the bulk delete. It assumes the data
         * properly validated by the callee and it will delete the actions without any extra validation.
         *
         * @param int[]  $ids Action IDs.
         * @param string $ids_sql Inherited and unused.
         */
        protected function bulk_delete(array $ids, $ids_sql)
        {
        }
        /**
         * Implements the logic behind running an action. ActionScheduler_Abstract_ListTable validates the request and their
         * parameters are valid.
         *
         * @param int $action_id Action ID.
         */
        protected function row_action_cancel($action_id)
        {
        }
        /**
         * Implements the logic behind running an action. ActionScheduler_Abstract_ListTable validates the request and their
         * parameters are valid.
         *
         * @param int $action_id Action ID.
         */
        protected function row_action_run($action_id)
        {
        }
        /**
         * Force the data store schema updates.
         */
        protected function recreate_tables()
        {
        }
        /**
         * Implements the logic behind processing an action once an action link is clicked on the list table.
         *
         * @param int    $action_id Action ID.
         * @param string $row_action_type The type of action to perform on the action.
         */
        protected function process_row_action($action_id, $row_action_type)
        {
        }
        /**
         * {@inheritDoc}
         */
        public function prepare_items()
        {
        }
        /**
         * Prints the available statuses so the user can click to filter.
         */
        protected function display_filter_by_status()
        {
        }
        /**
         * Get the text to display in the search box on the list table.
         */
        protected function get_search_box_button_text()
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function get_per_page_option_name()
        {
        }
    }
    /**
     * Class ActionScheduler_LogEntry
     */
    class ActionScheduler_LogEntry
    {
        /**
         * Action's ID for log entry.
         *
         * @var int $action_id
         */
        protected $action_id = '';
        /**
         * Log entry's message.
         *
         * @var string $message
         */
        protected $message = '';
        /**
         * Log entry's date.
         *
         * @var Datetime $date
         */
        protected $date;
        /**
         * Constructor
         *
         * @param mixed    $action_id Action ID.
         * @param string   $message   Message.
         * @param Datetime $date      Datetime object with the time when this log entry was created. If this parameter is
         *                            not provided a new Datetime object (with current time) will be created.
         */
        public function __construct($action_id, $message, $date = \null)
        {
        }
        /**
         * Returns the date when this log entry was created
         *
         * @return Datetime
         */
        public function get_date()
        {
        }
        /**
         * Get action ID of log entry.
         */
        public function get_action_id()
        {
        }
        /**
         * Get log entry message.
         */
        public function get_message()
        {
        }
    }
    /**
     * Class ActionScheduler_NullLogEntry
     */
    class ActionScheduler_NullLogEntry extends \ActionScheduler_LogEntry
    {
        /**
         * Construct.
         *
         * @param string $action_id Action ID.
         * @param string $message   Log entry.
         */
        public function __construct($action_id = '', $message = '')
        {
        }
    }
    /**
     * Abstract class for setting a basic lock to throttle some action.
     *
     * Class ActionScheduler_Lock
     */
    abstract class ActionScheduler_Lock
    {
        /**
         * Instance.
         *
         * @var ActionScheduler_Lock
         */
        private static $locker = \null;
        /**
         * Duration of lock.
         *
         * @var int
         */
        protected static $lock_duration = \MINUTE_IN_SECONDS;
        /**
         * Check if a lock is set for a given lock type.
         *
         * @param string $lock_type A string to identify different lock types.
         * @return bool
         */
        public function is_locked($lock_type)
        {
        }
        /**
         * Set a lock.
         *
         * To prevent race conditions, implementations should avoid setting the lock if the lock is already held.
         *
         * @param string $lock_type A string to identify different lock types.
         * @return bool
         */
        abstract public function set($lock_type);
        /**
         * If a lock is set, return the timestamp it was set to expiry.
         *
         * @param string $lock_type A string to identify different lock types.
         * @return bool|int False if no lock is set, otherwise the timestamp for when the lock is set to expire.
         */
        abstract public function get_expiration($lock_type);
        /**
         * Get the amount of time to set for a given lock. 60 seconds by default.
         *
         * @param string $lock_type A string to identify different lock types.
         * @return int
         */
        protected function get_duration($lock_type)
        {
        }
        /**
         * Get instance.
         *
         * @return ActionScheduler_Lock
         */
        public static function instance()
        {
        }
    }
    /**
     * Provide a way to set simple transient locks to block behaviour
     * for up-to a given duration.
     *
     * Class ActionScheduler_OptionLock
     *
     * @since 3.0.0
     */
    class ActionScheduler_OptionLock extends \ActionScheduler_Lock
    {
        /**
         * Set a lock using options for a given amount of time (60 seconds by default).
         *
         * Using an autoloaded option avoids running database queries or other resource intensive tasks
         * on frequently triggered hooks, like 'init' or 'shutdown'.
         *
         * For example, ActionScheduler_QueueRunner->maybe_dispatch_async_request() uses a lock to avoid
         * calling ActionScheduler_QueueRunner->has_maximum_concurrent_batches() every time the 'shutdown',
         * hook is triggered, because that method calls ActionScheduler_QueueRunner->store->get_claim_count()
         * to find the current number of claims in the database.
         *
         * @param string $lock_type A string to identify different lock types.
         * @bool True if lock value has changed, false if not or if set failed.
         */
        public function set($lock_type)
        {
        }
        /**
         * If a lock is set, return the timestamp it was set to expiry.
         *
         * @param string $lock_type A string to identify different lock types.
         * @return bool|int False if no lock is set, otherwise the timestamp for when the lock is set to expire.
         */
        public function get_expiration($lock_type)
        {
        }
        /**
         * Given the lock string, derives the lock expiration timestamp (or false if it cannot be determined).
         *
         * @param string $lock_value String containing a timestamp, or pipe-separated combination of unique value and timestamp.
         *
         * @return false|int
         */
        private function get_expiration_from($lock_value)
        {
        }
        /**
         * Get the key to use for storing the lock in the transient
         *
         * @param string $lock_type A string to identify different lock types.
         * @return string
         */
        protected function get_key($lock_type)
        {
        }
        /**
         * Supplies the existing lock value, or an empty string if not set.
         *
         * @param string $lock_type A string to identify different lock types.
         *
         * @return string
         */
        private function get_existing_lock($lock_type)
        {
        }
        /**
         * Supplies a lock value consisting of a unique value and the current timestamp, which are separated by a pipe
         * character.
         *
         * Example: (string) "649de012e6b262.09774912|1688068114"
         *
         * @param string $lock_type A string to identify different lock types.
         *
         * @return string
         */
        private function new_lock_value($lock_type)
        {
        }
    }
    /**
     * Class ActionScheduler_QueueCleaner
     */
    class ActionScheduler_QueueCleaner
    {
        /**
         * The batch size.
         *
         * @var int
         */
        protected $batch_size;
        /**
         * ActionScheduler_Store instance.
         *
         * @var ActionScheduler_Store
         */
        private $store = \null;
        /**
         * 31 days in seconds.
         *
         * @var int
         */
        private $month_in_seconds = 2678400;
        /**
         * Default list of statuses purged by the cleaner process.
         *
         * @var string[]
         */
        private $default_statuses_to_purge = array(\ActionScheduler_Store::STATUS_COMPLETE, \ActionScheduler_Store::STATUS_CANCELED);
        /**
         * ActionScheduler_QueueCleaner constructor.
         *
         * @param ActionScheduler_Store|null $store      The store instance.
         * @param int                        $batch_size The batch size.
         */
        public function __construct(?\ActionScheduler_Store $store = \null, $batch_size = 20)
        {
        }
        /**
         * Default queue cleaner process used by queue runner.
         *
         * @return array
         */
        public function delete_old_actions()
        {
        }
        /**
         * Delete selected actions limited by status and date.
         *
         * @param string[] $statuses_to_purge List of action statuses to purge. Defaults to canceled, complete.
         * @param DateTime $cutoff_date Date limit for selecting actions. Defaults to 31 days ago.
         * @param int|null $batch_size Maximum number of actions per status to delete. Defaults to 20.
         * @param string   $context Calling process context. Defaults to `old`.
         * @return array Actions deleted.
         */
        public function clean_actions(array $statuses_to_purge, \DateTime $cutoff_date, $batch_size = \null, $context = 'old')
        {
        }
        /**
         * Delete actions.
         *
         * @param int[]  $actions_to_delete List of action IDs to delete.
         * @param int    $lifespan Minimum scheduled age in seconds of the actions being deleted.
         * @param string $context Context of the delete request.
         * @return array Deleted action IDs.
         */
        private function delete_actions(array $actions_to_delete, $lifespan = \null, $context = 'old')
        {
        }
        /**
         * Unclaim pending actions that have not been run within a given time limit.
         *
         * When called by ActionScheduler_Abstract_QueueRunner::run_cleanup(), the time limit passed
         * as a parameter is 10x the time limit used for queue processing.
         *
         * @param int $time_limit The number of seconds to allow a queue to run before unclaiming its pending actions. Default 300 (5 minutes).
         */
        public function reset_timeouts($time_limit = 300)
        {
        }
        /**
         * Mark actions that have been running for more than a given time limit as failed, based on
         * the assumption some uncatchable and unloggable fatal error occurred during processing.
         *
         * When called by ActionScheduler_Abstract_QueueRunner::run_cleanup(), the time limit passed
         * as a parameter is 10x the time limit used for queue processing.
         *
         * @param int $time_limit The number of seconds to allow an action to run before it is considered to have failed. Default 300 (5 minutes).
         */
        public function mark_failures($time_limit = 300)
        {
        }
        /**
         * Do all of the cleaning actions.
         *
         * @param int $time_limit The number of seconds to use as the timeout and failure period. Default 300 (5 minutes).
         */
        public function clean($time_limit = 300)
        {
        }
        /**
         * Get the batch size for cleaning the queue.
         *
         * @return int
         */
        protected function get_batch_size()
        {
        }
    }
    /**
     * Abstract class with common Queue Cleaner functionality.
     */
    abstract class ActionScheduler_Abstract_QueueRunner_Deprecated
    {
        /**
         * Get the maximum number of seconds a batch can run for.
         *
         * @deprecated 2.1.1
         * @return int The number of seconds.
         */
        protected function get_maximum_execution_time()
        {
        }
    }
    /**
     * Abstract class with common Queue Cleaner functionality.
     */
    abstract class ActionScheduler_Abstract_QueueRunner extends \ActionScheduler_Abstract_QueueRunner_Deprecated
    {
        /**
         * ActionScheduler_QueueCleaner instance.
         *
         * @var ActionScheduler_QueueCleaner
         */
        protected $cleaner;
        /**
         * ActionScheduler_FatalErrorMonitor instance.
         *
         * @var ActionScheduler_FatalErrorMonitor
         */
        protected $monitor;
        /**
         * ActionScheduler_Store instance.
         *
         * @var ActionScheduler_Store
         */
        protected $store;
        /**
         * The created time.
         *
         * Represents when the queue runner was constructed and used when calculating how long a PHP request has been running.
         * For this reason it should be as close as possible to the PHP request start time.
         *
         * @var int
         */
        private $created_time;
        /**
         * ActionScheduler_Abstract_QueueRunner constructor.
         *
         * @param ActionScheduler_Store|null             $store Store object.
         * @param ActionScheduler_FatalErrorMonitor|null $monitor Monitor object.
         * @param ActionScheduler_QueueCleaner|null      $cleaner Cleaner object.
         */
        public function __construct(?\ActionScheduler_Store $store = \null, ?\ActionScheduler_FatalErrorMonitor $monitor = \null, ?\ActionScheduler_QueueCleaner $cleaner = \null)
        {
        }
        /**
         * Process an individual action.
         *
         * @param int    $action_id The action ID to process.
         * @param string $context Optional identifier for the context in which this action is being processed, e.g. 'WP CLI' or 'WP Cron'
         *                        Generally, this should be capitalised and not localised as it's a proper noun.
         * @throws \Exception When error running action.
         */
        public function process_action($action_id, $context = '')
        {
        }
        /**
         * Marks actions as either having failed execution or failed validation, as appropriate.
         *
         * @param int       $action_id    Action ID.
         * @param Exception $e            Exception instance.
         * @param string    $context      Execution context.
         * @param bool      $valid_action If the action is valid.
         *
         * @return void
         */
        private function handle_action_error($action_id, $e, $context, $valid_action)
        {
        }
        /**
         * Schedule the next instance of the action if necessary.
         *
         * @param ActionScheduler_Action $action Action.
         * @param int                    $action_id Action ID.
         */
        protected function schedule_next_instance(\ActionScheduler_Action $action, $action_id)
        {
        }
        /**
         * Determine if the specified recurring action has been consistently failing.
         *
         * @param ActionScheduler_Action $action    The recurring action to be rescheduled.
         * @param int                    $action_id The ID of the recurring action.
         *
         * @return bool
         */
        private function recurring_action_is_consistently_failing(\ActionScheduler_Action $action, $action_id)
        {
        }
        /**
         * Run the queue cleaner.
         */
        protected function run_cleanup()
        {
        }
        /**
         * Get the number of concurrent batches a runner allows.
         *
         * @return int
         */
        public function get_allowed_concurrent_batches()
        {
        }
        /**
         * Check if the number of allowed concurrent batches is met or exceeded.
         *
         * @return bool
         */
        public function has_maximum_concurrent_batches()
        {
        }
        /**
         * Get the maximum number of seconds a batch can run for.
         *
         * @return int The number of seconds.
         */
        protected function get_time_limit()
        {
        }
        /**
         * Get the number of seconds the process has been running.
         *
         * @return int The number of seconds.
         */
        protected function get_execution_time()
        {
        }
        /**
         * Check if the host's max execution time is (likely) to be exceeded if processing more actions.
         *
         * @param int $processed_actions The number of actions processed so far - used to determine the likelihood of exceeding the time limit if processing another action.
         * @return bool
         */
        protected function time_likely_to_be_exceeded($processed_actions)
        {
        }
        /**
         * Get memory limit
         *
         * Based on WP_Background_Process::get_memory_limit()
         *
         * @return int
         */
        protected function get_memory_limit()
        {
        }
        /**
         * Memory exceeded
         *
         * Ensures the batch process never exceeds 90% of the maximum WordPress memory.
         *
         * Based on WP_Background_Process::memory_exceeded()
         *
         * @return bool
         */
        protected function memory_exceeded()
        {
        }
        /**
         * See if the batch limits have been exceeded, which is when memory usage is almost at
         * the maximum limit, or the time to process more actions will exceed the max time limit.
         *
         * Based on WC_Background_Process::batch_limits_exceeded()
         *
         * @param int $processed_actions The number of actions processed so far - used to determine the likelihood of exceeding the time limit if processing another action.
         * @return bool
         */
        protected function batch_limits_exceeded($processed_actions)
        {
        }
        /**
         * Process actions in the queue.
         *
         * @param string $context Optional identifier for the context in which this action is being processed, e.g. 'WP CLI' or 'WP Cron'
         *        Generally, this should be capitalised and not localised as it's a proper noun.
         * @return int The number of actions processed.
         */
        abstract public function run($context = '');
    }
    /**
     * Class ActionScheduler_QueueRunner
     */
    class ActionScheduler_QueueRunner extends \ActionScheduler_Abstract_QueueRunner
    {
        const WP_CRON_HOOK = 'action_scheduler_run_queue';
        const WP_CRON_SCHEDULE = 'every_minute';
        /**
         * ActionScheduler_AsyncRequest_QueueRunner instance.
         *
         * @var ActionScheduler_AsyncRequest_QueueRunner
         */
        protected $async_request;
        /**
         * ActionScheduler_QueueRunner instance.
         *
         * @var ActionScheduler_QueueRunner
         */
        private static $runner = \null;
        /**
         * Number of processed actions.
         *
         * @var int
         */
        private $processed_actions_count = 0;
        /**
         * Get instance.
         *
         * @return ActionScheduler_QueueRunner
         * @codeCoverageIgnore
         */
        public static function instance()
        {
        }
        /**
         * ActionScheduler_QueueRunner constructor.
         *
         * @param ActionScheduler_Store|null                    $store Store object.
         * @param ActionScheduler_FatalErrorMonitor|null        $monitor Monitor object.
         * @param ActionScheduler_QueueCleaner|null             $cleaner Cleaner object.
         * @param ActionScheduler_AsyncRequest_QueueRunner|null $async_request Async request runner object.
         */
        public function __construct(?\ActionScheduler_Store $store = \null, ?\ActionScheduler_FatalErrorMonitor $monitor = \null, ?\ActionScheduler_QueueCleaner $cleaner = \null, ?\ActionScheduler_AsyncRequest_QueueRunner $async_request = \null)
        {
        }
        /**
         * Initialize.
         *
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
        /**
         * Hook check for dispatching an async request.
         */
        public function hook_dispatch_async_request()
        {
        }
        /**
         * Unhook check for dispatching an async request.
         */
        public function unhook_dispatch_async_request()
        {
        }
        /**
         * Check if we should dispatch an async request to process actions.
         *
         * This method is attached to 'shutdown', so is called frequently. To avoid slowing down
         * the site, it mitigates the work performed in each request by:
         * 1. checking if it's in the admin context and then
         * 2. haven't run on the 'shutdown' hook within the lock time (60 seconds by default)
         * 3. haven't exceeded the number of allowed batches.
         *
         * The order of these checks is important, because they run from a check on a value:
         * 1. in memory - is_admin() maps to $GLOBALS or the WP_ADMIN constant
         * 2. in memory - transients use autoloaded options by default
         * 3. from a database query - has_maximum_concurrent_batches() run the query
         *    $this->store->get_claim_count() to find the current number of claims in the DB.
         *
         * If all of these conditions are met, then we request an async runner check whether it
         * should dispatch a request to process pending actions.
         */
        public function maybe_dispatch_async_request()
        {
        }
        /**
         * Process actions in the queue. Attached to self::WP_CRON_HOOK i.e. 'action_scheduler_run_queue'
         *
         * The $context param of this method defaults to 'WP Cron', because prior to Action Scheduler 3.0.0
         * that was the only context in which this method was run, and the self::WP_CRON_HOOK hook had no context
         * passed along with it. New code calling this method directly, or by triggering the self::WP_CRON_HOOK,
         * should set a context as the first parameter. For an example of this, refer to the code seen in
         *
         * @see ActionScheduler_AsyncRequest_QueueRunner::handle()
         *
         * @param string $context Optional identifier for the context in which this action is being processed, e.g. 'WP CLI' or 'WP Cron'
         *        Generally, this should be capitalised and not localised as it's a proper noun.
         * @return int The number of actions processed.
         */
        public function run($context = 'WP Cron')
        {
        }
        /**
         * Process a batch of actions pending in the queue.
         *
         * Actions are processed by claiming a set of pending actions then processing each one until either the batch
         * size is completed, or memory or time limits are reached, defined by @see $this->batch_limits_exceeded().
         *
         * @param int    $size The maximum number of actions to process in the batch.
         * @param string $context Optional identifier for the context in which this action is being processed, e.g. 'WP CLI' or 'WP Cron'
         *                        Generally, this should be capitalised and not localised as it's a proper noun.
         * @return int The number of actions processed.
         */
        protected function do_batch($size = 100, $context = '')
        {
        }
        /**
         * Flush the cache if possible (intended for use after a batch of actions has been processed).
         *
         * This is useful because running large batches can eat up memory and because invalid data can accrue in the
         * runtime cache, which may lead to unexpected results.
         */
        protected function clear_caches()
        {
        }
        /**
         * Add schedule to WP cron.
         *
         * @param array<string, array<string, int|string>> $schedules Schedules.
         * @return array<string, array<string, int|string>>
         */
        public function add_wp_cron_schedule($schedules)
        {
        }
    }
    /**
     * Provides information about active and registered instances of Action Scheduler.
     */
    class ActionScheduler_SystemInformation
    {
        /**
         * Returns information about the plugin or theme which contains the current active version
         * of Action Scheduler.
         *
         * If this cannot be determined, or if Action Scheduler is being loaded via some other
         * method, then it will return an empty array. Otherwise, if populated, the array will
         * look like the following:
         *
         *     [
         *         'type' => 'plugin', # or 'theme'
         *         'name' => 'Name',
         *     ]
         *
         * @return array
         */
        public static function active_source(): array
        {
        }
        /**
         * Returns the directory path for the currently active installation of Action Scheduler.
         *
         * @return string
         */
        public static function active_source_path(): string
        {
        }
        /**
         * Get registered sources.
         *
         * It is not always possible to obtain this information. For instance, if earlier versions (<=3.9.0) of
         * Action Scheduler register themselves first, then the necessary data about registered sources will
         * not be available.
         *
         * @return array<string, string>
         */
        public static function get_sources()
        {
        }
    }
    /**
     * Class ActionScheduler_Versions
     */
    class ActionScheduler_Versions
    {
        /**
         * ActionScheduler_Versions instance.
         *
         * @var ActionScheduler_Versions
         */
        private static $instance = \null;
        /**
         * Versions.
         *
         * @var array<string, callable>
         */
        private $versions = array();
        /**
         * Registered sources.
         *
         * @var array<string, string>
         */
        private $sources = array();
        /**
         * Register version's callback.
         *
         * @param string   $version_string          Action Scheduler version.
         * @param callable $initialization_callback Callback to initialize the version.
         */
        public function register($version_string, $initialization_callback)
        {
        }
        /**
         * Get all versions.
         */
        public function get_versions()
        {
        }
        /**
         * Get registered sources.
         *
         * Use with caution: this method is only available as of Action Scheduler's 3.9.1
         * release and, owing to the way Action Scheduler is loaded, it's possible that the
         * class definition used at runtime will belong to an earlier version.
         *
         * @since 3.9.1
         *
         * @return array<string, string>
         */
        public function get_sources()
        {
        }
        /**
         * Get latest version registered.
         */
        public function latest_version()
        {
        }
        /**
         * Get callback for latest registered version.
         */
        public function latest_version_callback()
        {
        }
        /**
         * Get instance.
         *
         * @return ActionScheduler_Versions
         * @codeCoverageIgnore
         */
        public static function instance()
        {
        }
        /**
         * Initialize.
         *
         * @codeCoverageIgnore
         */
        public static function initialize_latest_version()
        {
        }
        /**
         * Returns information about the plugin or theme which contains the current active version
         * of Action Scheduler.
         *
         * If this cannot be determined, or if Action Scheduler is being loaded via some other
         * method, then it will return an empty array. Otherwise, if populated, the array will
         * look like the following:
         *
         *     [
         *         'type' => 'plugin', # or 'theme'
         *         'name' => 'Name',
         *     ]
         *
         * @deprecated 3.9.2 Use ActionScheduler_SystemInformation::active_source().
         *
         * @return array
         */
        public function active_source(): array
        {
        }
        /**
         * Returns the directory path for the currently active installation of Action Scheduler.
         *
         * @deprecated 3.9.2 Use ActionScheduler_SystemInformation::active_source_path().
         *
         * @return string
         */
        public function active_source_path(): string
        {
        }
    }
    /**
     * Class ActionScheduler_WPCommentCleaner
     *
     * @since 3.0.0
     */
    class ActionScheduler_WPCommentCleaner
    {
        /**
         * Post migration hook used to cleanup the WP comment table.
         *
         * @var string
         */
        protected static $cleanup_hook = 'action_scheduler/cleanup_wp_comment_logs';
        /**
         * An instance of the ActionScheduler_wpCommentLogger class to interact with the comments table.
         *
         * This instance should only be used as an interface. It should not be initialized.
         *
         * @var ActionScheduler_wpCommentLogger
         */
        protected static $wp_comment_logger = \null;
        /**
         * The key used to store the cached value of whether there are logs in the WP comment table.
         *
         * @var string
         */
        protected static $has_logs_option_key = 'as_has_wp_comment_logs';
        /**
         * Initialize the class and attach callbacks.
         */
        public static function init()
        {
        }
        /**
         * Determines if there are log entries in the wp comments table.
         *
         * Uses the flag set on migration completion set by @see self::maybe_schedule_cleanup().
         *
         * @return boolean Whether there are scheduled action comments in the comments table.
         */
        public static function has_logs()
        {
        }
        /**
         * Schedules the WP Post comment table cleanup to run in 6 months if it's not already scheduled.
         * Attached to the migration complete hook 'action_scheduler/migration_complete'.
         */
        public static function maybe_schedule_cleanup()
        {
        }
        /**
         * Delete all action comments from the WP Comments table.
         */
        public static function delete_all_action_comments()
        {
        }
        /**
         * Registers admin notices about the orphaned action logs.
         */
        public static function register_admin_notice()
        {
        }
        /**
         * Prints details about the orphaned action logs and includes information on where to learn more.
         */
        public static function print_admin_notice()
        {
        }
    }
    /**
     * Class ActionScheduler_wcSystemStatus
     */
    class ActionScheduler_wcSystemStatus
    {
        /**
         * The active data stores
         *
         * @var ActionScheduler_Store
         */
        protected $store;
        /**
         * Constructor method for ActionScheduler_wcSystemStatus.
         *
         * @param ActionScheduler_Store $store Active store object.
         *
         * @return void
         */
        public function __construct($store)
        {
        }
        /**
         * Display action data, including number of actions grouped by status and the oldest & newest action in each status.
         *
         * Helpful to identify issues, like a clogged queue.
         */
        public function render()
        {
        }
        /**
         * Get oldest and newest scheduled dates for a given set of statuses.
         *
         * @param array $status_keys Set of statuses to find oldest & newest action for.
         * @return array
         */
        protected function get_oldest_and_newest($status_keys)
        {
        }
        /**
         * Get oldest or newest scheduled date for a given status.
         *
         * @param string $status Action status label/name string.
         * @param string $date_type Oldest or Newest.
         * @return DateTime
         */
        protected function get_action_status_date($status, $date_type = 'oldest')
        {
        }
        /**
         * Get oldest or newest scheduled date for a given status.
         *
         * @param array $status_labels Set of statuses to find oldest & newest action for.
         * @param array $action_counts Number of actions grouped by status.
         * @param array $oldest_and_newest Date of the oldest and newest action with each status.
         */
        protected function get_template($status_labels, $action_counts, $oldest_and_newest)
        {
        }
        /**
         * Is triggered when invoking inaccessible methods in an object context.
         *
         * @param string $name Name of method called.
         * @param array  $arguments Parameters to invoke the method with.
         *
         * @return mixed
         * @link https://php.net/manual/en/language.oop5.overloading.php#language.oop5.overloading.methods
         */
        public function __call($name, $arguments)
        {
        }
    }
    /**
     * Abstract for WP-CLI commands.
     */
    abstract class ActionScheduler_WPCLI_Command extends \WP_CLI_Command
    {
        const DATE_FORMAT = 'Y-m-d H:i:s O';
        /**
         * Keyed arguments.
         *
         * @var string[]
         */
        protected $args;
        /**
         * Positional arguments.
         *
         * @var array<string, string>
         */
        protected $assoc_args;
        /**
         * Construct.
         *
         * @param string[]              $args       Positional arguments.
         * @param array<string, string> $assoc_args Keyed arguments.
         * @throws \Exception When loading a CLI command file outside of WP CLI context.
         */
        public function __construct(array $args, array $assoc_args)
        {
        }
        /**
         * Execute command.
         */
        abstract public function execute();
        /**
         * Get the scheduled date in a human friendly format.
         *
         * @see ActionScheduler_ListTable::get_schedule_display_string()
         * @param ActionScheduler_Schedule $schedule Schedule.
         * @return string
         */
        protected function get_schedule_display_string(\ActionScheduler_Schedule $schedule)
        {
        }
        /**
         * Transforms arguments with '__' from CSV into expected arrays.
         *
         * @see \WP_CLI\CommandWithDBObject::process_csv_arguments_to_arrays()
         * @link https://github.com/wp-cli/entity-command/blob/c270cc9a2367cb8f5845f26a6b5e203397c91392/src/WP_CLI/CommandWithDBObject.php#L99
         * @return void
         */
        protected function process_csv_arguments_to_arrays()
        {
        }
    }
}
namespace Action_Scheduler\WP_CLI\Action {
    /**
     * WP-CLI command: action-scheduler action cancel
     */
    class Cancel_Command extends \ActionScheduler_WPCLI_Command
    {
        /**
         * Execute command.
         *
         * @return void
         */
        public function execute()
        {
        }
        /**
         * Cancel single action.
         *
         * @param string $hook The hook that the job will trigger.
         * @param array  $callback_args Args that would have been passed to the job.
         * @param string $group The group the job is assigned to.
         * @return void
         */
        protected function cancel_single($hook, $callback_args, $group)
        {
        }
        /**
         * Cancel all actions.
         *
         * @param string $hook The hook that the job will trigger.
         * @param array  $callback_args Args that would have been passed to the job.
         * @param string $group The group the job is assigned to.
         * @return void
         */
        protected function cancel_all($hook, $callback_args, $group)
        {
        }
        /**
         * Print a success message.
         *
         * @return void
         */
        protected function print_success()
        {
        }
        /**
         * Convert an exception into a WP CLI error.
         *
         * @param \Exception $e The error object.
         * @param bool       $multiple Boolean if multiple actions.
         * @throws \WP_CLI\ExitException When an error occurs.
         * @return void
         */
        protected function print_error(\Exception $e, $multiple)
        {
        }
    }
    /**
     * WP-CLI command: action-scheduler action create
     */
    class Create_Command extends \ActionScheduler_WPCLI_Command
    {
        const ASYNC_OPTS = array('async', 0);
        /**
         * Execute command.
         *
         * @return void
         */
        public function execute()
        {
        }
        /**
         * Print a success message with the action ID.
         *
         * @param int    $action_id   Created action ID.
         * @param string $action_type Type of action.
         *
         * @return void
         */
        protected function print_success($action_id, $action_type)
        {
        }
        /**
         * Convert an exception into a WP CLI error.
         *
         * @param \Exception $e The error object.
         * @throws \WP_CLI\ExitException When an error occurs.
         * @return void
         */
        protected function print_error(\Exception $e)
        {
        }
    }
    /**
     * WP-CLI command: action-scheduler action delete
     */
    class Delete_Command extends \ActionScheduler_WPCLI_Command
    {
        /**
         * Array of action IDs to delete.
         *
         * @var int[]
         */
        protected $action_ids = array();
        /**
         * Number of deleted, failed, and total actions deleted.
         *
         * @var array<string, int>
         */
        protected $action_counts = array('deleted' => 0, 'failed' => 0, 'total' => 0);
        /**
         * Construct.
         *
         * @param string[]              $args       Positional arguments.
         * @param array<string, string> $assoc_args Keyed arguments.
         */
        public function __construct(array $args, array $assoc_args)
        {
        }
        /**
         * Execute.
         *
         * @return void
         */
        public function execute()
        {
        }
        /**
         * Action: action_scheduler_deleted_action
         *
         * @param int $action_id Action ID.
         * @return void
         */
        public function on_action_deleted($action_id)
        {
        }
    }
    /**
     * WP-CLI command: action-scheduler action generate
     */
    class Generate_Command extends \ActionScheduler_WPCLI_Command
    {
        /**
         * Execute command.
         *
         * @return void
         */
        public function execute()
        {
        }
        /**
         * Schedule multiple single actions.
         *
         * @param int    $schedule_start Starting timestamp of first action.
         * @param int    $interval How long to wait between runs.
         * @param int    $count Limit number of actions to schedule.
         * @param string $hook The hook to trigger.
         * @param array  $args Arguments to pass when the hook triggers.
         * @param string $group The group to assign this job to.
         * @return int[] IDs of actions added.
         */
        protected function generate($schedule_start, $interval, $count, $hook, array $args = array(), $group = '')
        {
        }
        /**
         * Print a success message with the action ID.
         *
         * @param int    $actions_added Number of actions generated.
         * @param string $action_type   Type of actions scheduled.
         * @return void
         */
        protected function print_success($actions_added, $action_type)
        {
        }
        /**
         * Convert an exception into a WP CLI error.
         *
         * @param \Exception $e The error object.
         * @throws \WP_CLI\ExitException When an error occurs.
         * @return void
         */
        protected function print_error(\Exception $e)
        {
        }
    }
    /**
     * WP-CLI command: action-scheduler action get
     */
    class Get_Command extends \ActionScheduler_WPCLI_Command
    {
        /**
         * Execute command.
         *
         * @return void
         */
        public function execute()
        {
        }
    }
    // phpcs:disable WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaping output is not necessary in WP CLI.
    /**
     * WP-CLI command: action-scheduler action list
     */
    class List_Command extends \ActionScheduler_WPCLI_Command
    {
        const PARAMETERS = array('hook', 'args', 'date', 'date_compare', 'modified', 'modified_compare', 'group', 'status', 'claimed', 'per_page', 'offset', 'orderby', 'order');
        /**
         * Execute command.
         *
         * @return void
         */
        public function execute()
        {
        }
    }
    /**
     * WP-CLI command: action-scheduler action next
     */
    class Next_Command extends \ActionScheduler_WPCLI_Command
    {
        /**
         * Execute command.
         *
         * @return void
         */
        public function execute()
        {
        }
    }
    /**
     * WP-CLI command: action-scheduler action run
     */
    class Run_Command extends \ActionScheduler_WPCLI_Command
    {
        /**
         * Array of action IDs to execute.
         *
         * @var int[]
         */
        protected $action_ids = array();
        /**
         * Number of executed, failed, ignored, invalid, and total actions.
         *
         * @var array<string, int>
         */
        protected $action_counts = array('executed' => 0, 'failed' => 0, 'ignored' => 0, 'invalid' => 0, 'total' => 0);
        /**
         * Construct.
         *
         * @param string[]              $args       Positional arguments.
         * @param array<string, string> $assoc_args Keyed arguments.
         */
        public function __construct(array $args, array $assoc_args)
        {
        }
        /**
         * Execute.
         *
         * @return void
         */
        public function execute()
        {
        }
        /**
         * Action: action_scheduler_execution_ignored
         *
         * @param int $action_id Action ID.
         * @return void
         */
        public function on_action_ignored($action_id)
        {
        }
        /**
         * Action: action_scheduler_after_execute
         *
         * @param int $action_id Action ID.
         * @return void
         */
        public function on_action_executed($action_id)
        {
        }
        /**
         * Action: action_scheduler_failed_execution
         *
         * @param int        $action_id Action ID.
         * @param \Exception $e         Exception.
         * @return void
         */
        public function on_action_failed($action_id, \Exception $e)
        {
        }
        /**
         * Action: action_scheduler_failed_validation
         *
         * @param int        $action_id Action ID.
         * @param \Exception $e         Exception.
         * @return void
         */
        public function on_action_invalid($action_id, \Exception $e)
        {
        }
    }
}
namespace {
    /**
     * Commands for Action Scheduler.
     */
    class ActionScheduler_WPCLI_Clean_Command extends \WP_CLI_Command
    {
        /**
         * Run the Action Scheduler Queue Cleaner
         *
         * ## OPTIONS
         *
         * [--batch-size=<size>]
         * : The maximum number of actions to delete per batch. Defaults to 20.
         *
         * [--batches=<size>]
         * : Limit execution to a number of batches. Defaults to 0, meaning batches will continue all eligible actions are deleted.
         *
         * [--status=<status>]
         * : Only clean actions with the specified status. Defaults to Canceled, Completed. Define multiple statuses as a comma separated string (without spaces), e.g. `--status=complete,failed,canceled`
         *
         * [--before=<datestring>]
         * : Only delete actions with scheduled date older than this. Defaults to 31 days. e.g `--before='7 days ago'`, `--before='02-Feb-2020 20:20:20'`
         *
         * [--pause=<seconds>]
         * : The number of seconds to pause between batches. Default no pause.
         *
         * @param array $args Positional arguments.
         * @param array $assoc_args Keyed arguments.
         * @throws \WP_CLI\ExitException When an error occurs.
         *
         * @subcommand clean
         */
        public function clean($args, $assoc_args)
        {
        }
        /**
         * Print WP CLI message about how many batches of actions were processed.
         *
         * @param int $batches_processed Number of batches processed.
         */
        protected function print_total_batches(int $batches_processed)
        {
        }
        /**
         * Convert an exception into a WP CLI error.
         *
         * @param Exception $e The error object.
         */
        protected function print_error(\Exception $e)
        {
        }
        /**
         * Print a success message with the number of completed actions.
         *
         * @param int $actions_deleted Number of deleted actions.
         */
        protected function print_success(int $actions_deleted)
        {
        }
    }
    /**
     * WP CLI Queue runner.
     *
     * This class can only be called from within a WP CLI instance.
     */
    class ActionScheduler_WPCLI_QueueRunner extends \ActionScheduler_Abstract_QueueRunner
    {
        /**
         * Claimed actions.
         *
         * @var array
         */
        protected $actions;
        /**
         * ActionScheduler_ActionClaim instance.
         *
         * @var ActionScheduler_ActionClaim
         */
        protected $claim;
        /**
         * Progress bar instance.
         *
         * @var \cli\progress\Bar
         */
        protected $progress_bar;
        /**
         * ActionScheduler_WPCLI_QueueRunner constructor.
         *
         * @param ActionScheduler_Store|null             $store Store object.
         * @param ActionScheduler_FatalErrorMonitor|null $monitor Monitor object.
         * @param ActionScheduler_QueueCleaner|null      $cleaner Cleaner object.
         *
         * @throws Exception When this is not run within WP CLI.
         */
        public function __construct(?\ActionScheduler_Store $store = \null, ?\ActionScheduler_FatalErrorMonitor $monitor = \null, ?\ActionScheduler_QueueCleaner $cleaner = \null)
        {
        }
        /**
         * Set up the Queue before processing.
         *
         * @param int    $batch_size The batch size to process.
         * @param array  $hooks      The hooks being used to filter the actions claimed in this batch.
         * @param string $group      The group of actions to claim with this batch.
         * @param bool   $force      Whether to force running even with too many concurrent processes.
         *
         * @return int The number of actions that will be run.
         * @throws \WP_CLI\ExitException When there are too many concurrent batches.
         */
        public function setup($batch_size, $hooks = array(), $group = '', $force = \false)
        {
        }
        /**
         * Add our hooks to the appropriate actions.
         */
        protected function add_hooks()
        {
        }
        /**
         * Set up the WP CLI progress bar.
         */
        protected function setup_progress_bar()
        {
        }
        /**
         * Process actions in the queue.
         *
         * @param string $context Optional runner context. Default 'WP CLI'.
         *
         * @return int The number of actions processed.
         */
        public function run($context = 'WP CLI')
        {
        }
        /**
         * Handle WP CLI message when the action is starting.
         *
         * @param int $action_id Action ID.
         */
        public function before_execute($action_id)
        {
        }
        /**
         * Handle WP CLI message when the action has completed.
         *
         * @param int                         $action_id ActionID.
         * @param null|ActionScheduler_Action $action The instance of the action. Default to null for backward compatibility.
         */
        public function after_execute($action_id, $action = \null)
        {
        }
        /**
         * Handle WP CLI message when the action has failed.
         *
         * @param int       $action_id Action ID.
         * @param Exception $exception Exception.
         * @throws \WP_CLI\ExitException With failure message.
         */
        public function action_failed($action_id, $exception)
        {
        }
        /**
         * Sleep and help avoid hitting memory limit
         *
         * @param int $sleep_time Amount of seconds to sleep.
         * @deprecated 3.0.0
         */
        protected function stop_the_insanity($sleep_time = 0)
        {
        }
        /**
         * Maybe trigger the stop_the_insanity() method to free up memory.
         */
        protected function maybe_stop_the_insanity()
        {
        }
    }
    /**
     * Commands for Action Scheduler.
     */
    class ActionScheduler_WPCLI_Scheduler_command extends \WP_CLI_Command
    {
        /**
         * Force tables schema creation for Action Scheduler
         *
         * ## OPTIONS
         *
         * @param array $args Positional arguments.
         * @param array $assoc_args Keyed arguments.
         *
         * @subcommand fix-schema
         */
        public function fix_schema($args, $assoc_args)
        {
        }
        /**
         * Run the Action Scheduler
         *
         * ## OPTIONS
         *
         * [--batch-size=<size>]
         * : The maximum number of actions to run. Defaults to 100.
         *
         * [--batches=<size>]
         * : Limit execution to a number of batches. Defaults to 0, meaning batches will continue being executed until all actions are complete.
         *
         * [--cleanup-batch-size=<size>]
         * : The maximum number of actions to clean up. Defaults to the value of --batch-size.
         *
         * [--hooks=<hooks>]
         * : Only run actions with the specified hook. Omitting this option runs actions with any hook. Define multiple hooks as a comma separated string (without spaces), e.g. `--hooks=hook_one,hook_two,hook_three`
         *
         * [--group=<group>]
         * : Only run actions from the specified group. Omitting this option runs actions from all groups.
         *
         * [--exclude-groups=<groups>]
         * : Run actions from all groups except the specified group(s). Define multiple groups as a comma separated string (without spaces), e.g. '--group_a,group_b'. This option is ignored when `--group` is used.
         *
         * [--free-memory-on=<count>]
         * : The number of actions to process between freeing memory. 0 disables freeing memory. Default 50.
         *
         * [--pause=<seconds>]
         * : The number of seconds to pause when freeing memory. Default no pause.
         *
         * [--force]
         * : Whether to force execution despite the maximum number of concurrent processes being exceeded.
         *
         * @param array $args Positional arguments.
         * @param array $assoc_args Keyed arguments.
         * @throws \WP_CLI\ExitException When an error occurs.
         *
         * @subcommand run
         */
        public function run($args, $assoc_args)
        {
        }
        /**
         * Converts a string of comma-separated values into an array of those same values.
         *
         * @param string $string The string of one or more comma separated values.
         *
         * @return array
         */
        private function parse_comma_separated_string($string): array
        {
        }
        /**
         * Print WP CLI message about how many actions are about to be processed.
         *
         * @param int $total Number of actions found.
         */
        protected function print_total_actions($total)
        {
        }
        /**
         * Print WP CLI message about how many batches of actions were processed.
         *
         * @param int $batches_completed Number of completed batches.
         */
        protected function print_total_batches($batches_completed)
        {
        }
        /**
         * Convert an exception into a WP CLI error.
         *
         * @param Exception $e The error object.
         *
         * @throws \WP_CLI\ExitException Under some conditions WP CLI may throw an exception.
         */
        protected function print_error(\Exception $e)
        {
        }
        /**
         * Print a success message with the number of completed actions.
         *
         * @param int $actions_completed Number of completed actions.
         */
        protected function print_success($actions_completed)
        {
        }
    }
}
namespace Action_Scheduler\WP_CLI {
    /**
     * Action command for Action Scheduler.
     */
    class Action_Command extends \WP_CLI_Command
    {
        /**
         * Cancel the next occurrence or all occurrences of a scheduled action.
         *
         * ## OPTIONS
         *
         * [<hook>]
         * : Name of the action hook.
         *
         * [--group=<group>]
         * : The group the job is assigned to.
         *
         * [--args=<args>]
         * : JSON object of arguments assigned to the job.
         * ---
         * default: []
         * ---
         *
         * [--all]
         * : Cancel all occurrences of a scheduled action.
         *
         * @param array $args       Positional arguments.
         * @param array $assoc_args Keyed arguments.
         * @return void
         */
        public function cancel(array $args, array $assoc_args)
        {
        }
        /**
         * Creates a new scheduled action.
         *
         * ## OPTIONS
         *
         * <hook>
         * : Name of the action hook.
         *
         * <start>
         * : A unix timestamp representing the date you want the action to start. Also 'async' or 'now' to enqueue an async action.
         *
         * [--args=<args>]
         * : JSON object of arguments to pass to callbacks when the hook triggers.
         * ---
         * default: []
         * ---
         *
         * [--cron=<cron>]
         * : A cron-like schedule string (https://crontab.guru/).
         * ---
         * default: ''
         * ---
         *
         * [--group=<group>]
         * : The group to assign this job to.
         * ---
         * default: ''
         * ---
         *
         * [--interval=<interval>]
         * : Number of seconds to wait between runs.
         * ---
         * default: 0
         * ---
         *
         * ## EXAMPLES
         *
         *     wp action-scheduler action create hook_async async
         *     wp action-scheduler action create hook_single 1627147598
         *     wp action-scheduler action create hook_recurring 1627148188 --interval=5
         *     wp action-scheduler action create hook_cron 1627147655 --cron='5 4 * * *'
         *
         * @param array $args       Positional arguments.
         * @param array $assoc_args Keyed arguments.
         * @return void
         */
        public function create(array $args, array $assoc_args)
        {
        }
        /**
         * Delete existing scheduled action(s).
         *
         * ## OPTIONS
         *
         * <id>...
         * : One or more IDs of actions to delete.
         * ---
         * default: 0
         * ---
         *
         * ## EXAMPLES
         *
         *     # Delete the action with id 100
         *     $ wp action-scheduler action delete 100
         *
         *     # Delete the actions with ids 100 and 200
         *     $ wp action-scheduler action delete 100 200
         *
         *     # Delete the first five pending actions in 'action-scheduler' group
         *     $ wp action-scheduler action delete $( wp action-scheduler action list --status=pending --group=action-scheduler --format=ids )
         *
         * @param array $args       Positional arguments.
         * @param array $assoc_args Keyed arguments.
         * @return void
         */
        public function delete(array $args, array $assoc_args)
        {
        }
        /**
         * Generates some scheduled actions.
         *
         * ## OPTIONS
         *
         * <hook>
         * : Name of the action hook.
         *
         * <start>
         * : The Unix timestamp representing the date you want the action to start.
         *
         * [--count=<count>]
         * : Number of actions to create.
         * ---
         * default: 1
         * ---
         *
         * [--interval=<interval>]
         * : Number of seconds to wait between runs.
         * ---
         * default: 0
         * ---
         *
         * [--args=<args>]
         * : JSON object of arguments to pass to callbacks when the hook triggers.
         * ---
         * default: []
         * ---
         *
         * [--group=<group>]
         * : The group to assign this job to.
         * ---
         * default: ''
         * ---
         *
         * ## EXAMPLES
         *
         *     wp action-scheduler action generate test_multiple 1627147598 --count=5 --interval=5
         *
         * @param array $args       Positional arguments.
         * @param array $assoc_args Keyed arguments.
         * @return void
         */
        public function generate(array $args, array $assoc_args)
        {
        }
        /**
         * Get details about a scheduled action.
         *
         * ## OPTIONS
         *
         * <id>
         * : The ID of the action to get.
         * ---
         * default: 0
         * ---
         *
         * [--field=<field>]
         * : Instead of returning the whole action, returns the value of a single field.
         *
         * [--fields=<fields>]
         * : Limit the output to specific fields (comma-separated). Defaults to all fields.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         *   - yaml
         * ---
         *
         * @param array $args       Positional arguments.
         * @param array $assoc_args Keyed arguments.
         * @return void
         */
        public function get(array $args, array $assoc_args)
        {
        }
        /**
         * Get a list of scheduled actions.
         *
         * Display actions based on all arguments supported by
         * [as_get_scheduled_actions()](https://actionscheduler.org/api/#function-reference--as_get_scheduled_actions).
         *
         * ## OPTIONS
         *
         * [--<field>=<value>]
         * : One or more arguments to pass to as_get_scheduled_actions().
         *
         * [--field=<field>]
         * : Prints the value of a single property for each action.
         *
         * [--fields=<fields>]
         * : Limit the output to specific object properties.
         *
         * [--format=<format>]
         * : Render output in a particular format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - ids
         *   - json
         *   - count
         *   - yaml
         * ---
         *
         * ## AVAILABLE FIELDS
         *
         * These fields will be displayed by default for each action:
         *
         * * id
         * * hook
         * * status
         * * group
         * * recurring
         * * scheduled_date
         *
         * These fields are optionally available:
         *
         * * args
         * * log_entries
         *
         * @param array $args       Positional arguments.
         * @param array $assoc_args Keyed arguments.
         * @return void
         *
         * @subcommand list
         */
        public function subcommand_list(array $args, array $assoc_args)
        {
        }
        /**
         * Get logs for a scheduled action.
         *
         * ## OPTIONS
         *
         * <id>
         * : The ID of the action to get.
         * ---
         * default: 0
         * ---
         *
         * @param array $args Positional arguments.
         * @return void
         */
        public function logs(array $args)
        {
        }
        /**
         * Get the ID or timestamp of the next scheduled action.
         *
         * ## OPTIONS
         *
         * <hook>
         * : The hook of the next scheduled action.
         *
         * [--args=<args>]
         * : JSON object of arguments to search for next scheduled action.
         * ---
         * default: []
         * ---
         *
         * [--group=<group>]
         * : The group to which the next scheduled action is assigned.
         * ---
         * default: ''
         * ---
         *
         * [--raw]
         * : Display the raw output of as_next_scheduled_action() (timestamp or boolean).
         *
         * @param array $args       Positional arguments.
         * @param array $assoc_args Keyed arguments.
         * @return void
         */
        public function next(array $args, array $assoc_args)
        {
        }
        /**
         * Run existing scheduled action(s).
         *
         * ## OPTIONS
         *
         * <id>...
         * : One or more IDs of actions to run.
         * ---
         * default: 0
         * ---
         *
         * ## EXAMPLES
         *
         *     # Run the action with id 100
         *     $ wp action-scheduler action run 100
         *
         *     # Run the actions with ids 100 and 200
         *     $ wp action-scheduler action run 100 200
         *
         *     # Run the first five pending actions in 'action-scheduler' group
         *     $ wp action-scheduler action run $( wp action-scheduler action list --status=pending --group=action-scheduler --format=ids )
         *
         * @param array $args       Positional arguments.
         * @param array $assoc_args Keyed arguments.
         * @return void
         */
        public function run(array $args, array $assoc_args)
        {
        }
    }
    /**
     * Class Migration_Command
     *
     * @package Action_Scheduler\WP_CLI
     *
     * @since 3.0.0
     *
     * @codeCoverageIgnore
     */
    class Migration_Command extends \WP_CLI_Command
    {
        /**
         * Number of actions migrated.
         *
         * @var int
         */
        private $total_processed = 0;
        /**
         * Register the command with WP-CLI
         */
        public function register()
        {
        }
        /**
         * Process the data migration.
         *
         * @param array $positional_args Required for WP CLI. Not used in migration.
         * @param array $assoc_args Optional arguments.
         *
         * @return void
         */
        public function migrate($positional_args, $assoc_args)
        {
        }
        /**
         * Build the config object used to create the Runner
         *
         * @param array $args Optional arguments.
         *
         * @return ActionScheduler\Migration\Config
         */
        private function get_migration_config($args)
        {
        }
        /**
         * Hook command line logging into migration actions.
         */
        private function init_logging()
        {
        }
    }
    /**
     * WP_CLI progress bar for Action Scheduler.
     */
    /**
     * Class ProgressBar
     *
     * @package Action_Scheduler\WP_CLI
     *
     * @since 3.0.0
     *
     * @codeCoverageIgnore
     */
    class ProgressBar
    {
        /**
         * Current number of ticks.
         *
         * @var integer
         */
        protected $total_ticks;
        /**
         * Total number of ticks.
         *
         * @var integer
         */
        protected $count;
        /**
         * Progress bar update interval.
         *
         * @var integer
         */
        protected $interval;
        /**
         * Progress bar message.
         *
         * @var string
         */
        protected $message;
        /**
         * Instance.
         *
         * @var \cli\progress\Bar
         */
        protected $progress_bar;
        /**
         * ProgressBar constructor.
         *
         * @param string  $message    Text to display before the progress bar.
         * @param integer $count      Total number of ticks to be performed.
         * @param integer $interval   Optional. The interval in milliseconds between updates. Default 100.
         *
         * @throws \Exception When this is not run within WP CLI.
         */
        public function __construct($message, $count, $interval = 100)
        {
        }
        /**
         * Increment the progress bar ticks.
         */
        public function tick()
        {
        }
        /**
         * Get the progress bar tick count.
         *
         * @return int
         */
        public function current()
        {
        }
        /**
         * Finish the current progress bar.
         */
        public function finish()
        {
        }
        /**
         * Set the message used when creating the progress bar.
         *
         * @param string $message The message to be used when the next progress bar is created.
         */
        public function set_message($message)
        {
        }
        /**
         * Set the count for a new progress bar.
         *
         * @param integer $count The total number of ticks expected to complete.
         */
        public function set_count($count)
        {
        }
        /**
         * Set up the progress bar.
         */
        protected function setup_progress_bar()
        {
        }
    }
    /**
     * System info WP-CLI commands for Action Scheduler.
     */
    class System_Command
    {
        /**
         * Data store for querying actions
         *
         * @var ActionScheduler_Store
         */
        protected $store;
        /**
         * Construct.
         */
        public function __construct()
        {
        }
        /**
         * Print in-use data store class.
         *
         * @param array $args       Positional args.
         * @param array $assoc_args Keyed args.
         * @return void
         *
         * @subcommand data-store
         */
        public function datastore(array $args, array $assoc_args)
        {
        }
        /**
         * Print in-use runner class.
         *
         * @param array $args       Positional args.
         * @param array $assoc_args Keyed args.
         * @return void
         */
        public function runner(array $args, array $assoc_args)
        {
        }
        /**
         * Get system status.
         *
         * @param array $args       Positional args.
         * @param array $assoc_args Keyed args.
         * @return void
         */
        public function status(array $args, array $assoc_args)
        {
        }
        /**
         * Display the active version, or all registered versions.
         *
         * ## OPTIONS
         *
         * [--all]
         * : List all registered versions.
         *
         * @param array $args       Positional args.
         * @param array $assoc_args Keyed args.
         * @return void
         */
        public function version(array $args, array $assoc_args)
        {
        }
        /**
         * Display the current source, or all registered sources.
         *
         * ## OPTIONS
         *
         * [--all]
         * : List all registered sources.
         *
         * [--fullpath]
         * : List full path of source(s).
         *
         * @param array $args       Positional args.
         * @param array $assoc_args Keyed args.
         * @uses ActionScheduler_SystemInformation::active_source_path()
         * @uses \WP_CLI\Formatter::display_items()
         * @uses $this->get_latest_version()
         * @return void
         */
        public function source(array $args, array $assoc_args)
        {
        }
        /**
         * Get current data store.
         *
         * @return string
         */
        protected function get_current_datastore()
        {
        }
        /**
         * Get latest version.
         *
         * @param null|\ActionScheduler_Versions $instance Versions.
         * @return string
         */
        protected function get_latest_version($instance = null)
        {
        }
        /**
         * Get current runner.
         *
         * @return string
         */
        protected function get_current_runner()
        {
        }
        /**
         * Get oldest and newest scheduled dates for a given set of statuses.
         *
         * @param array $status_keys Set of statuses to find oldest & newest action for.
         * @return array
         */
        protected function get_oldest_and_newest($status_keys)
        {
        }
        /**
         * Get oldest or newest scheduled date for a given status.
         *
         * @param string $status Action status label/name string.
         * @param string $date_type Oldest or Newest.
         * @return string
         */
        protected function get_action_status_date($status, $date_type = 'oldest')
        {
        }
    }
}
namespace {
    /**
     * Class ActionScheduler
     *
     * @codeCoverageIgnore
     */
    abstract class ActionScheduler
    {
        /**
         * Plugin file path.
         *
         * @var string
         */
        private static $plugin_file = '';
        /**
         * ActionScheduler_ActionFactory instance.
         *
         * @var ActionScheduler_ActionFactory
         */
        private static $factory = \null;
        /**
         * Data store is initialized.
         *
         * @var bool
         */
        private static $data_store_initialized = \false;
        /**
         * Factory.
         */
        public static function factory()
        {
        }
        /**
         * Get Store instance.
         */
        public static function store()
        {
        }
        /**
         * Get Lock instance.
         */
        public static function lock()
        {
        }
        /**
         * Get Logger instance.
         */
        public static function logger()
        {
        }
        /**
         * Get QueueRunner instance.
         */
        public static function runner()
        {
        }
        /**
         * Get AdminView instance.
         */
        public static function admin_view()
        {
        }
        /**
         * Get the absolute system path to the plugin directory, or a file therein
         *
         * @static
         * @param string $path Path relative to plugin directory.
         * @return string
         */
        public static function plugin_path($path)
        {
        }
        /**
         * Get the absolute URL to the plugin directory, or a file therein
         *
         * @static
         * @param string $path Path relative to plugin directory.
         * @return string
         */
        public static function plugin_url($path)
        {
        }
        /**
         * Autoload.
         *
         * @param string $class Class name.
         */
        public static function autoload($class)
        {
        }
        /**
         * Initialize the plugin
         *
         * @static
         * @param string $plugin_file Plugin file path.
         */
        public static function init($plugin_file)
        {
        }
        /**
         * Check whether the AS data store has been initialized.
         *
         * @param string $function_name The name of the function being called. Optional. Default `null`.
         * @return bool
         */
        public static function is_initialized($function_name = \null)
        {
        }
        /**
         * Determine if the class is one of our abstract classes.
         *
         * @since 3.0.0
         *
         * @param string $class The class name.
         *
         * @return bool
         */
        protected static function is_class_abstract($class)
        {
        }
        /**
         * Determine if the class is one of our migration classes.
         *
         * @since 3.0.0
         *
         * @param string $class The class name.
         *
         * @return bool
         */
        protected static function is_class_migration($class)
        {
        }
        /**
         * Determine if the class is one of our WP CLI classes.
         *
         * @since 3.0.0
         *
         * @param string $class The class name.
         *
         * @return bool
         */
        protected static function is_class_cli($class)
        {
        }
        /**
         * Clone.
         */
        final public function __clone()
        {
        }
        /**
         * Wakeup.
         */
        final public function __wakeup()
        {
        }
        /**
         * Construct.
         */
        final private function __construct()
        {
        }
        /** Deprecated **/
        /**
         * Get DateTime object.
         *
         * @param null|string $when     Date/time string.
         * @param string      $timezone Timezone string.
         */
        public static function get_datetime_object($when = \null, $timezone = 'UTC')
        {
        }
        /**
         * Issue deprecated warning if an Action Scheduler function is called in the shutdown hook.
         *
         * @param string $function_name The name of the function being called.
         * @deprecated 3.1.6.
         */
        public static function check_shutdown_hook($function_name)
        {
        }
    }
    /**
     * Class ActionScheduler_Schedule
     */
    interface ActionScheduler_Schedule
    {
        /**
         * Get the date & time this schedule was created to run, or calculate when it should be run
         * after a given date & time.
         *
         * @param null|DateTime $after Timestamp.
         * @return DateTime|null
         */
        public function next(?\DateTime $after = \null);
        /**
         * Identify the schedule as (not) recurring.
         *
         * @return bool
         */
        public function is_recurring();
    }
    /**
     * Class ActionScheduler_Abstract_Schedule
     */
    abstract class ActionScheduler_Schedule_Deprecated implements \ActionScheduler_Schedule
    {
        /**
         * Get the date & time this schedule was created to run, or calculate when it should be run
         * after a given date & time.
         *
         * @param DateTime $after DateTime to calculate against.
         *
         * @return DateTime|null
         */
        public function next(?\DateTime $after = \null)
        {
        }
    }
    /**
     * Class ActionScheduler_Abstract_Schedule
     */
    abstract class ActionScheduler_Abstract_Schedule extends \ActionScheduler_Schedule_Deprecated
    {
        /**
         * The date & time the schedule is set to run.
         *
         * @var DateTime
         */
        private $scheduled_date = \null;
        /**
         * Timestamp equivalent of @see $this->scheduled_date
         *
         * @var int
         */
        protected $scheduled_timestamp = \null;
        /**
         * Construct.
         *
         * @param DateTime $date The date & time to run the action.
         */
        public function __construct(\DateTime $date)
        {
        }
        /**
         * Check if a schedule should recur.
         *
         * @return bool
         */
        abstract public function is_recurring();
        /**
         * Calculate when the next instance of this schedule would run based on a given date & time.
         *
         * @param DateTime $after Start timestamp.
         * @return DateTime
         */
        abstract protected function calculate_next(\DateTime $after);
        /**
         * Get the next date & time when this schedule should run after a given date & time.
         *
         * @param DateTime $after Start timestamp.
         * @return DateTime|null
         */
        public function get_next(\DateTime $after)
        {
        }
        /**
         * Get the date & time the schedule is set to run.
         *
         * @return DateTime|null
         */
        public function get_date()
        {
        }
        /**
         * For PHP 5.2 compat, because DateTime objects can't be serialized
         *
         * @return array
         */
        public function __sleep()
        {
        }
        /**
         * Wakeup.
         */
        public function __wakeup()
        {
        }
    }
    /**
     * Class ActionScheduler_Abstract_RecurringSchedule
     */
    abstract class ActionScheduler_Abstract_RecurringSchedule extends \ActionScheduler_Abstract_Schedule
    {
        /**
         * The date & time the first instance of this schedule was setup to run (which may not be this instance).
         *
         * Schedule objects are attached to an action object. Each schedule stores the run date for that
         * object as the start date - @see $this->start - and logic to calculate the next run date after
         * that - @see $this->calculate_next(). The $first_date property also keeps a record of when the very
         * first instance of this chain of schedules ran.
         *
         * @var DateTime
         */
        private $first_date = \null;
        /**
         * Timestamp equivalent of @see $this->first_date
         *
         * @var int
         */
        protected $first_timestamp = \null;
        /**
         * The recurrence between each time an action is run using this schedule.
         * Used to calculate the start date & time. Can be a number of seconds, in the
         * case of ActionScheduler_IntervalSchedule, or a cron expression, as in the
         * case of ActionScheduler_CronSchedule. Or something else.
         *
         * @var mixed
         */
        protected $recurrence;
        /**
         * Construct.
         *
         * @param DateTime      $date The date & time to run the action.
         * @param mixed         $recurrence The data used to determine the schedule's recurrence.
         * @param DateTime|null $first (Optional) The date & time the first instance of this interval schedule ran. Default null, meaning this is the first instance.
         */
        public function __construct(\DateTime $date, $recurrence, ?\DateTime $first = \null)
        {
        }
        /**
         * Schedule is recurring.
         *
         * @return bool
         */
        public function is_recurring()
        {
        }
        /**
         * Get the date & time of the first schedule in this recurring series.
         *
         * @return DateTime|null
         */
        public function get_first_date()
        {
        }
        /**
         * Get the schedule's recurrence.
         *
         * @return string
         */
        public function get_recurrence()
        {
        }
        /**
         * For PHP 5.2 compat, since DateTime objects can't be serialized
         *
         * @return array
         */
        public function __sleep()
        {
        }
        /**
         * Unserialize recurring schedules serialized/stored prior to AS 3.0.0
         *
         * Prior to Action Scheduler 3.0.0, schedules used different property names to refer
         * to equivalent data. For example, ActionScheduler_IntervalSchedule::start_timestamp
         * was the same as ActionScheduler_SimpleSchedule::timestamp. This was addressed in
         * Action Scheduler 3.0.0, where properties and property names were aligned for better
         * inheritance. To maintain backward compatibility with scheduled serialized and stored
         * prior to 3.0, we need to correctly map the old property names.
         */
        public function __wakeup()
        {
        }
    }
    /**
     * Class ActionScheduler_Abstract_Schema
     *
     * @package Action_Scheduler
     *
     * @codeCoverageIgnore
     *
     * Utility class for creating/updating custom tables
     */
    abstract class ActionScheduler_Abstract_Schema
    {
        /**
         * Increment this value in derived class to trigger a schema update.
         *
         * @var int
         */
        protected $schema_version = 1;
        /**
         * Schema version stored in database.
         *
         * @var string
         */
        protected $db_version;
        /**
         * Names of tables that will be registered by this class.
         *
         * @var array
         */
        protected $tables = array();
        /**
         * Can optionally be used by concrete classes to carry out additional initialization work
         * as needed.
         */
        public function init()
        {
        }
        /**
         * Register tables with WordPress, and create them if needed.
         *
         * @param bool $force_update Optional. Default false. Use true to always run the schema update.
         *
         * @return void
         */
        public function register_tables($force_update = \false)
        {
        }
        /**
         * Get table definition.
         *
         * @param string $table The name of the table.
         *
         * @return string The CREATE TABLE statement, suitable for passing to dbDelta
         */
        abstract protected function get_table_definition($table);
        /**
         * Determine if the database schema is out of date
         * by comparing the integer found in $this->schema_version
         * with the option set in the WordPress options table
         *
         * @return bool
         */
        private function schema_update_required()
        {
        }
        /**
         * Update the option in WordPress to indicate that
         * our schema is now up to date
         *
         * @return void
         */
        private function mark_schema_update_complete()
        {
        }
        /**
         * Update the schema for the given table
         *
         * @param string $table The name of the table to update.
         *
         * @return void
         */
        private function update_table($table)
        {
        }
        /**
         * Get full table name.
         *
         * @param string $table Table name.
         *
         * @return string The full name of the table, including the
         *                table prefix for the current blog
         */
        protected function get_full_table_name($table)
        {
        }
        /**
         * Confirms that all of the tables registered by this schema class have been created.
         *
         * @return bool
         */
        public function tables_exist()
        {
        }
    }
    /**
     * Class ActionScheduler_Logger
     *
     * @codeCoverageIgnore
     */
    abstract class ActionScheduler_Logger
    {
        /**
         * Instance.
         *
         * @var null|self
         */
        private static $logger = \null;
        /**
         * Get instance.
         *
         * @return ActionScheduler_Logger
         */
        public static function instance()
        {
        }
        /**
         * Create log entry.
         *
         * @param string        $action_id Action ID.
         * @param string        $message   Log message.
         * @param DateTime|null $date      Log date.
         *
         * @return string The log entry ID
         */
        abstract public function log($action_id, $message, ?\DateTime $date = \null);
        /**
         * Get action's log entry.
         *
         * @param string $entry_id Entry ID.
         *
         * @return ActionScheduler_LogEntry
         */
        abstract public function get_entry($entry_id);
        /**
         * Get action's logs.
         *
         * @param string $action_id Action ID.
         *
         * @return ActionScheduler_LogEntry[]
         */
        abstract public function get_logs($action_id);
        /**
         * Initialize.
         *
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
        /**
         * Register callback for storing action.
         */
        public function hook_stored_action()
        {
        }
        /**
         * Unhook callback for storing action.
         */
        public function unhook_stored_action()
        {
        }
        /**
         * Log action stored.
         *
         * @param int $action_id Action ID.
         */
        public function log_stored_action($action_id)
        {
        }
        /**
         * Log action cancellation.
         *
         * @param int $action_id Action ID.
         */
        public function log_canceled_action($action_id)
        {
        }
        /**
         * Log action start.
         *
         * @param int    $action_id Action ID.
         * @param string $context Action execution context.
         */
        public function log_started_action($action_id, $context = '')
        {
        }
        /**
         * Log action completion.
         *
         * @param int                         $action_id Action ID.
         * @param null|ActionScheduler_Action $action Action.
         * @param string                      $context Action execution context.
         */
        public function log_completed_action($action_id, $action = \null, $context = '')
        {
        }
        /**
         * Log action failure.
         *
         * @param int       $action_id Action ID.
         * @param Exception $exception Exception.
         * @param string    $context Action execution context.
         */
        public function log_failed_action($action_id, \Exception $exception, $context = '')
        {
        }
        /**
         * Log action timeout.
         *
         * @param int    $action_id  Action ID.
         * @param string $timeout Timeout.
         */
        public function log_timed_out_action($action_id, $timeout)
        {
        }
        /**
         * Log unexpected shutdown.
         *
         * @param int     $action_id Action ID.
         * @param mixed[] $error     Error.
         */
        public function log_unexpected_shutdown($action_id, $error)
        {
        }
        /**
         * Log action reset.
         *
         * @param int $action_id Action ID.
         */
        public function log_reset_action($action_id)
        {
        }
        /**
         * Log ignored action.
         *
         * @param int    $action_id Action ID.
         * @param string $context Action execution context.
         */
        public function log_ignored_action($action_id, $context = '')
        {
        }
        /**
         * Log the failure of fetching the action.
         *
         * @param string         $action_id Action ID.
         * @param null|Exception $exception The exception which occurred when fetching the action. NULL by default for backward compatibility.
         */
        public function log_failed_fetch_action($action_id, ?\Exception $exception = \null)
        {
        }
        /**
         * Log the failure of scheduling the action's next instance.
         *
         * @param int       $action_id Action ID.
         * @param Exception $exception Exception object.
         */
        public function log_failed_schedule_next_instance($action_id, \Exception $exception)
        {
        }
        /**
         * Bulk add cancel action log entries.
         *
         * Implemented here for backward compatibility. Should be implemented in parent loggers
         * for more performant bulk logging.
         *
         * @param array $action_ids List of action ID.
         */
        public function bulk_log_cancel_actions($action_ids)
        {
        }
    }
    /**
     * Class ActionScheduler_Store_Deprecated
     *
     * @codeCoverageIgnore
     */
    abstract class ActionScheduler_Store_Deprecated
    {
        /**
         * Mark an action that failed to fetch correctly as failed.
         *
         * @since 2.2.6
         *
         * @param int $action_id The ID of the action.
         */
        public function mark_failed_fetch_action($action_id)
        {
        }
        /**
         * Add base hooks
         *
         * @since 2.2.6
         */
        protected static function hook()
        {
        }
        /**
         * Remove base hooks
         *
         * @since 2.2.6
         */
        protected static function unhook()
        {
        }
        /**
         * Get the site's local time.
         *
         * @deprecated 2.1.0
         * @return DateTimeZone
         */
        protected function get_local_timezone()
        {
        }
    }
    /**
     * Class ActionScheduler_Store
     *
     * @codeCoverageIgnore
     */
    abstract class ActionScheduler_Store extends \ActionScheduler_Store_Deprecated
    {
        const STATUS_COMPLETE = 'complete';
        const STATUS_PENDING = 'pending';
        const STATUS_RUNNING = 'in-progress';
        const STATUS_FAILED = 'failed';
        const STATUS_CANCELED = 'canceled';
        const DEFAULT_CLASS = 'ActionScheduler_wpPostStore';
        /**
         * ActionScheduler_Store instance.
         *
         * @var ActionScheduler_Store
         */
        private static $store = \null;
        /**
         * Maximum length of args.
         *
         * @var int
         */
        protected static $max_args_length = 191;
        /**
         * Save action.
         *
         * @param ActionScheduler_Action $action Action to save.
         * @param null|DateTime          $scheduled_date Optional Date of the first instance
         *                                               to store. Otherwise uses the first date of the action's
         *                                               schedule.
         *
         * @return int The action ID
         */
        abstract public function save_action(\ActionScheduler_Action $action, ?\DateTime $scheduled_date = \null);
        /**
         * Get action.
         *
         * @param string $action_id Action ID.
         *
         * @return ActionScheduler_Action
         */
        abstract public function fetch_action($action_id);
        /**
         * Find an action.
         *
         * Note: the query ordering changes based on the passed 'status' value.
         *
         * @param string $hook Action hook.
         * @param array  $params Parameters of the action to find.
         *
         * @return string|null ID of the next action matching the criteria or NULL if not found.
         */
        public function find_action($hook, $params = array())
        {
        }
        /**
         * Query for action count or list of action IDs.
         *
         * @since 3.3.0 $query['status'] accepts array of statuses instead of a single status.
         *
         * @param array  $query {
         *      Query filtering options.
         *
         *      @type string       $hook             The name of the actions. Optional.
         *      @type string|array $status           The status or statuses of the actions. Optional.
         *      @type array        $args             The args array of the actions. Optional.
         *      @type DateTime     $date             The scheduled date of the action. Used in UTC timezone. Optional.
         *      @type string       $date_compare     Operator for selecting by $date param. Accepted values are '!=', '>', '>=', '<', '<=', '='. Defaults to '<='.
         *      @type DateTime     $modified         The last modified date of the action. Used in UTC timezone. Optional.
         *      @type string       $modified_compare Operator for comparing $modified param. Accepted values are '!=', '>', '>=', '<', '<=', '='. Defaults to '<='.
         *      @type string       $group            The group the action belongs to. Optional.
         *      @type bool|int     $claimed          TRUE to find claimed actions, FALSE to find unclaimed actions, an int to find a specific claim ID. Optional.
         *      @type int          $per_page         Number of results to return. Defaults to 5.
         *      @type int          $offset           The query pagination offset. Defaults to 0.
         *      @type int          $orderby          Accepted values are 'hook', 'group', 'modified', 'date' or 'none'. Defaults to 'date'.
         *      @type string       $order            Accepted values are 'ASC' or 'DESC'. Defaults to 'ASC'.
         * }
         * @param string $query_type Whether to select or count the results. Default, select.
         *
         * @return string|array|null The IDs of actions matching the query. Null on failure.
         */
        abstract public function query_actions($query = array(), $query_type = 'select');
        /**
         * Run query to get a single action ID.
         *
         * @since 3.3.0
         *
         * @see ActionScheduler_Store::query_actions for $query arg usage but 'per_page' and 'offset' can't be used.
         *
         * @param array $query Query parameters.
         *
         * @return int|null
         */
        public function query_action($query)
        {
        }
        /**
         * Get a count of all actions in the store, grouped by status
         *
         * @return array
         */
        abstract public function action_counts();
        /**
         * Get additional action counts.
         *
         * - add past-due actions
         *
         * @return array
         */
        public function extra_action_counts()
        {
        }
        /**
         * Cancel action.
         *
         * @param string $action_id Action ID.
         */
        abstract public function cancel_action($action_id);
        /**
         * Delete action.
         *
         * @param string $action_id Action ID.
         */
        abstract public function delete_action($action_id);
        /**
         * Get action's schedule or run timestamp.
         *
         * @param string $action_id Action ID.
         *
         * @return DateTime The date the action is schedule to run, or the date that it ran.
         */
        abstract public function get_date($action_id);
        /**
         * Make a claim.
         *
         * @param int           $max_actions Maximum number of actions to claim.
         * @param DateTime|null $before_date Claim only actions schedule before the given date. Defaults to now.
         * @param array         $hooks       Claim only actions with a hook or hooks.
         * @param string        $group       Claim only actions in the given group.
         *
         * @return ActionScheduler_ActionClaim
         */
        abstract public function stake_claim($max_actions = 10, ?\DateTime $before_date = \null, $hooks = array(), $group = '');
        /**
         * Get claim count.
         *
         * @return int
         */
        abstract public function get_claim_count();
        /**
         * Release the claim.
         *
         * @param ActionScheduler_ActionClaim $claim Claim object.
         */
        abstract public function release_claim(\ActionScheduler_ActionClaim $claim);
        /**
         * Un-claim the action.
         *
         * @param string $action_id Action ID.
         */
        abstract public function unclaim_action($action_id);
        /**
         * Mark action as failed.
         *
         * @param string $action_id Action ID.
         */
        abstract public function mark_failure($action_id);
        /**
         * Log action's execution.
         *
         * @param string $action_id Actoin ID.
         */
        abstract public function log_execution($action_id);
        /**
         * Mark action as complete.
         *
         * @param string $action_id Action ID.
         */
        abstract public function mark_complete($action_id);
        /**
         * Get action's status.
         *
         * @param string $action_id Action ID.
         * @return string
         */
        abstract public function get_status($action_id);
        /**
         * Get action's claim ID.
         *
         * @param string $action_id Action ID.
         * @return mixed
         */
        abstract public function get_claim_id($action_id);
        /**
         * Find actions by claim ID.
         *
         * @param string $claim_id Claim ID.
         * @return array
         */
        abstract public function find_actions_by_claim_id($claim_id);
        /**
         * Validate SQL operator.
         *
         * @param string $comparison_operator Operator.
         * @return string
         */
        protected function validate_sql_comparator($comparison_operator)
        {
        }
        /**
         * Get the time MySQL formatted date/time string for an action's (next) scheduled date.
         *
         * @param ActionScheduler_Action $action Action.
         * @param null|DateTime          $scheduled_date Action's schedule date (optional).
         * @return string
         */
        protected function get_scheduled_date_string(\ActionScheduler_Action $action, ?\DateTime $scheduled_date = \null)
        {
        }
        /**
         * Get the time MySQL formatted date/time string for an action's (next) scheduled date.
         *
         * @param ActionScheduler_Action|null $action Action.
         * @param null|DateTime               $scheduled_date Action's scheduled date (optional).
         * @return string
         */
        protected function get_scheduled_date_string_local(\ActionScheduler_Action $action, ?\DateTime $scheduled_date = \null)
        {
        }
        /**
         * Validate that we could decode action arguments.
         *
         * @param mixed $args      The decoded arguments.
         * @param int   $action_id The action ID.
         *
         * @throws ActionScheduler_InvalidActionException When the decoded arguments are invalid.
         */
        protected function validate_args($args, $action_id)
        {
        }
        /**
         * Validate a ActionScheduler_Schedule object.
         *
         * @param mixed $schedule  The unserialized ActionScheduler_Schedule object.
         * @param int   $action_id The action ID.
         *
         * @throws ActionScheduler_InvalidActionException When the schedule is invalid.
         */
        protected function validate_schedule($schedule, $action_id)
        {
        }
        /**
         * InnoDB indexes have a maximum size of 767 bytes by default, which is only 191 characters with utf8mb4.
         *
         * Previously, AS wasn't concerned about args length, as we used the (unindex) post_content column. However,
         * with custom tables, we use an indexed VARCHAR column instead.
         *
         * @param  ActionScheduler_Action $action Action to be validated.
         * @throws InvalidArgumentException When json encoded args is too long.
         */
        protected function validate_action(\ActionScheduler_Action $action)
        {
        }
        /**
         * Cancel pending actions by hook.
         *
         * @since 3.0.0
         *
         * @param string $hook Hook name.
         *
         * @return void
         */
        public function cancel_actions_by_hook($hook)
        {
        }
        /**
         * Cancel pending actions by group.
         *
         * @since 3.0.0
         *
         * @param string $group Group slug.
         *
         * @return void
         */
        public function cancel_actions_by_group($group)
        {
        }
        /**
         * Cancel a set of action IDs.
         *
         * @since 3.0.0
         *
         * @param int[] $action_ids List of action IDs.
         *
         * @return void
         */
        private function bulk_cancel_actions($action_ids)
        {
        }
        /**
         * Get status labels.
         *
         * @return array<string, string>
         */
        public function get_status_labels()
        {
        }
        /**
         * Check if there are any pending scheduled actions due to run.
         *
         * @return string
         */
        public function has_pending_actions_due()
        {
        }
        /**
         * Callable initialization function optionally overridden in derived classes.
         */
        public function init()
        {
        }
        /**
         * Callable function to mark an action as migrated optionally overridden in derived classes.
         *
         * @param int $action_id Action ID.
         */
        public function mark_migrated($action_id)
        {
        }
        /**
         * Get instance.
         *
         * @return ActionScheduler_Store
         */
        public static function instance()
        {
        }
    }
    /**
     * Class ActionScheduler_TimezoneHelper
     */
    abstract class ActionScheduler_TimezoneHelper
    {
        /**
         * DateTimeZone object.
         *
         * @var null|DateTimeZone
         */
        private static $local_timezone = \null;
        /**
         * Set a DateTime's timezone to the WordPress site's timezone, or a UTC offset
         * if no timezone string is available.
         *
         * @since  2.1.0
         *
         * @param DateTime $date Timestamp.
         * @return ActionScheduler_DateTime
         */
        public static function set_local_timezone(\DateTime $date)
        {
        }
        /**
         * Helper to retrieve the timezone string for a site until a WP core method exists
         * (see https://core.trac.wordpress.org/ticket/24730).
         *
         * Adapted from wc_timezone_string() and https://secure.php.net/manual/en/function.timezone-name-from-abbr.php#89155.
         *
         * If no timezone string is set, and its not possible to match the UTC offset set for the site to a timezone
         * string, then an empty string will be returned, and the UTC offset should be used to set a DateTime's
         * timezone.
         *
         * @since 2.1.0
         * @param bool $reset Unused.
         * @return string PHP timezone string for the site or empty if no timezone string is available.
         */
        protected static function get_local_timezone_string($reset = \false)
        {
        }
        /**
         * Get timezone offset in seconds.
         *
         * @since  2.1.0
         * @return float
         */
        protected static function get_local_timezone_offset()
        {
        }
        /**
         * Get local timezone.
         *
         * @param bool $reset Toggle to discard stored value.
         * @deprecated 2.1.0
         */
        public static function get_local_timezone($reset = \false)
        {
        }
    }
    /**
     * Class ActionScheduler_Action
     */
    class ActionScheduler_Action
    {
        /**
         * Action's hook.
         *
         * @var string
         */
        protected $hook = '';
        /**
         * Action's args.
         *
         * @var array<string, mixed>
         */
        protected $args = array();
        /**
         * Action's schedule.
         *
         * @var ActionScheduler_Schedule
         */
        protected $schedule = \null;
        /**
         * Action's group.
         *
         * @var string
         */
        protected $group = '';
        /**
         * Priorities are conceptually similar to those used for regular WordPress actions.
         * Like those, a lower priority takes precedence over a higher priority and the default
         * is 10.
         *
         * Unlike regular WordPress actions, the priority of a scheduled action is strictly an
         * integer and should be kept within the bounds 0-255 (anything outside the bounds will
         * be brought back into the acceptable range).
         *
         * @var int
         */
        protected $priority = 10;
        /**
         * Construct.
         *
         * @param string                        $hook Action's hook.
         * @param mixed[]                       $args Action's arguments.
         * @param null|ActionScheduler_Schedule $schedule Action's schedule.
         * @param string                        $group Action's group.
         */
        public function __construct($hook, array $args = array(), ?\ActionScheduler_Schedule $schedule = \null, $group = '')
        {
        }
        /**
         * Executes the action.
         *
         * If no callbacks are registered, an exception will be thrown and the action will not be
         * fired. This is useful to help detect cases where the code responsible for setting up
         * a scheduled action no longer exists.
         *
         * @throws Exception If no callbacks are registered for this action.
         */
        public function execute()
        {
        }
        /**
         * Set action's hook.
         *
         * @param string $hook Action's hook.
         */
        protected function set_hook($hook)
        {
        }
        /**
         * Get action's hook.
         */
        public function get_hook()
        {
        }
        /**
         * Set action's schedule.
         *
         * @param ActionScheduler_Schedule $schedule Action's schedule.
         */
        protected function set_schedule(\ActionScheduler_Schedule $schedule)
        {
        }
        /**
         * Action's schedule.
         *
         * @return ActionScheduler_Schedule
         */
        public function get_schedule()
        {
        }
        /**
         * Set action's args.
         *
         * @param mixed[] $args Action's arguments.
         */
        protected function set_args(array $args)
        {
        }
        /**
         * Get action's args.
         */
        public function get_args()
        {
        }
        /**
         * Section action's group.
         *
         * @param string $group Action's group.
         */
        protected function set_group($group)
        {
        }
        /**
         * Action's group.
         *
         * @return string
         */
        public function get_group()
        {
        }
        /**
         * Action has not finished.
         *
         * @return bool
         */
        public function is_finished()
        {
        }
        /**
         * Sets the priority of the action.
         *
         * @param int $priority Priority level (lower is higher priority). Should be in the range 0-255.
         *
         * @return void
         */
        public function set_priority($priority)
        {
        }
        /**
         * Gets the action priority.
         *
         * @return int
         */
        public function get_priority()
        {
        }
    }
    /**
     * Class ActionScheduler_FinishedAction
     */
    class ActionScheduler_FinishedAction extends \ActionScheduler_Action
    {
        /**
         * Execute action.
         */
        public function execute()
        {
        }
        /**
         * Get finished state.
         */
        public function is_finished()
        {
        }
    }
    /**
     * Class ActionScheduler_CanceledAction
     *
     * Stored action which was canceled and therefore acts like a finished action but should always return a null schedule,
     * regardless of schedule passed to its constructor.
     */
    class ActionScheduler_CanceledAction extends \ActionScheduler_FinishedAction
    {
        /**
         * Construct.
         *
         * @param string                        $hook Action's hook.
         * @param array                         $args Action's arguments.
         * @param null|ActionScheduler_Schedule $schedule Action's schedule.
         * @param string                        $group Action's group.
         */
        public function __construct($hook, array $args = array(), ?\ActionScheduler_Schedule $schedule = \null, $group = '')
        {
        }
    }
    /**
     * Class ActionScheduler_NullAction
     */
    class ActionScheduler_NullAction extends \ActionScheduler_Action
    {
        /**
         * Construct.
         *
         * @param string                        $hook Action hook.
         * @param mixed[]                       $args Action arguments.
         * @param null|ActionScheduler_Schedule $schedule Action schedule.
         */
        public function __construct($hook = '', array $args = array(), ?\ActionScheduler_Schedule $schedule = \null)
        {
        }
        /**
         * Execute action.
         */
        public function execute()
        {
        }
    }
    /**
     * Class ActionScheduler_DBLogger
     *
     * Action logs data table data store.
     *
     * @since 3.0.0
     */
    class ActionScheduler_DBLogger extends \ActionScheduler_Logger
    {
        /**
         * Add a record to an action log.
         *
         * @param int           $action_id Action ID.
         * @param string        $message Message to be saved in the log entry.
         * @param DateTime|null $date Timestamp of the log entry.
         *
         * @return int     The log entry ID.
         */
        public function log($action_id, $message, ?\DateTime $date = \null)
        {
        }
        /**
         * Retrieve an action log entry.
         *
         * @param int $entry_id Log entry ID.
         *
         * @return ActionScheduler_LogEntry
         */
        public function get_entry($entry_id)
        {
        }
        /**
         * Create an action log entry from a database record.
         *
         * @param object $record Log entry database record object.
         *
         * @return ActionScheduler_LogEntry
         */
        private function create_entry_from_db_record($record)
        {
        }
        /**
         * Retrieve an action's log entries from the database.
         *
         * @param int $action_id Action ID.
         *
         * @return ActionScheduler_LogEntry[]
         */
        public function get_logs($action_id)
        {
        }
        /**
         * Initialize the data store.
         *
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
        /**
         * Delete the action logs for an action.
         *
         * @param int $action_id Action ID.
         */
        public function clear_deleted_action_logs($action_id)
        {
        }
        /**
         * Bulk add cancel action log entries.
         *
         * @param array $action_ids List of action ID.
         */
        public function bulk_log_cancel_actions($action_ids)
        {
        }
    }
    /**
     * Class ActionScheduler_DBStore
     *
     * Action data table data store.
     *
     * @since 3.0.0
     */
    class ActionScheduler_DBStore extends \ActionScheduler_Store
    {
        /**
         * Used to share information about the before_date property of claims internally.
         *
         * This is used in preference to passing the same information as a method param
         * for backwards-compatibility reasons.
         *
         * @var DateTime|null
         */
        private $claim_before_date = \null;
        /**
         * Maximum length of args.
         *
         * @var int
         */
        protected static $max_args_length = 8000;
        /**
         * Maximum length of index.
         *
         * @var int
         */
        protected static $max_index_length = 191;
        /**
         * List of claim filters.
         *
         * @var array
         */
        protected $claim_filters = array('group' => '', 'hooks' => '', 'exclude-groups' => '');
        /**
         * Initialize the data store
         *
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
        /**
         * Save an action, checks if this is a unique action before actually saving.
         *
         * @param ActionScheduler_Action $action         Action object.
         * @param DateTime|null          $scheduled_date Optional schedule date. Default null.
         *
         * @return int                  Action ID.
         * @throws RuntimeException     Throws exception when saving the action fails.
         */
        public function save_unique_action(\ActionScheduler_Action $action, ?\DateTime $scheduled_date = \null)
        {
        }
        /**
         * Save an action. Can save duplicate action as well, prefer using `save_unique_action` instead.
         *
         * @param ActionScheduler_Action $action Action object.
         * @param DateTime|null          $scheduled_date Optional schedule date. Default null.
         *
         * @return int Action ID.
         * @throws RuntimeException     Throws exception when saving the action fails.
         */
        public function save_action(\ActionScheduler_Action $action, ?\DateTime $scheduled_date = \null)
        {
        }
        /**
         * Save an action.
         *
         * @param ActionScheduler_Action $action Action object.
         * @param ?DateTime              $date Optional schedule date. Default null.
         * @param bool                   $unique Whether the action should be unique.
         *
         * @return int Action ID.
         * @throws \RuntimeException     Throws exception when saving the action fails.
         */
        private function save_action_to_db(\ActionScheduler_Action $action, ?\DateTime $date = \null, $unique = \false)
        {
        }
        /**
         * Helper function to build insert query.
         *
         * @param array $data Row data for action.
         * @param bool  $unique Whether the action should be unique.
         *
         * @return string Insert query.
         */
        private function build_insert_sql(array $data, $unique)
        {
        }
        /**
         * Helper method to build where clause for action insert statement.
         *
         * @param array  $data Row data for action.
         * @param string $table_name Action table name.
         * @param bool   $unique Where action should be unique.
         *
         * @return string Where clause to be used with insert.
         */
        private function build_where_clause_for_insert($data, $table_name, $unique)
        {
        }
        /**
         * Helper method to get $wpdb->prepare placeholder for a given column name.
         *
         * @param string $column_name Name of column in actions table.
         *
         * @return string Placeholder to use for given column.
         */
        private function get_placeholder_for_column($column_name)
        {
        }
        /**
         * Generate a hash from json_encoded $args using MD5 as this isn't for security.
         *
         * @param string $args JSON encoded action args.
         * @return string
         */
        protected function hash_args($args)
        {
        }
        /**
         * Get action args query param value from action args.
         *
         * @param array $args Action args.
         * @return string
         */
        protected function get_args_for_query($args)
        {
        }
        /**
         * Get a group's ID based on its name/slug.
         *
         * @param string|array $slugs                The string name of a group, or names for several groups.
         * @param bool         $create_if_not_exists Whether to create the group if it does not already exist. Default, true - create the group.
         *
         * @return array The group IDs, if they exist or were successfully created. May be empty.
         */
        protected function get_group_ids($slugs, $create_if_not_exists = \true)
        {
        }
        /**
         * Create an action group.
         *
         * @param string $slug Group slug.
         *
         * @return int Group ID.
         */
        protected function create_group($slug)
        {
        }
        /**
         * Retrieve an action.
         *
         * @param int $action_id Action ID.
         *
         * @return ActionScheduler_Action
         */
        public function fetch_action($action_id)
        {
        }
        /**
         * Create a null action.
         *
         * @return ActionScheduler_NullAction
         */
        protected function get_null_action()
        {
        }
        /**
         * Create an action from a database record.
         *
         * @param object $data Action database record.
         *
         * @return ActionScheduler_Action|ActionScheduler_CanceledAction|ActionScheduler_FinishedAction
         */
        protected function make_action_from_db_record($data)
        {
        }
        /**
         * Returns the SQL statement to query (or count) actions.
         *
         * @since 3.3.0 $query['status'] accepts array of statuses instead of a single status.
         *
         * @param array  $query Filtering options.
         * @param string $select_or_count  Whether the SQL should select and return the IDs or just the row count.
         *
         * @return string SQL statement already properly escaped.
         * @throws \InvalidArgumentException If the query is invalid.
         * @throws \RuntimeException When "unknown partial args matching value".
         */
        protected function get_query_actions_sql(array $query, $select_or_count = 'select')
        {
        }
        /**
         * Query for action count or list of action IDs.
         *
         * @since 3.3.0 $query['status'] accepts array of statuses instead of a single status.
         *
         * @see ActionScheduler_Store::query_actions for $query arg usage.
         *
         * @param array  $query      Query filtering options.
         * @param string $query_type Whether to select or count the results. Defaults to select.
         *
         * @return string|array|null The IDs of actions matching the query. Null on failure.
         */
        public function query_actions($query = array(), $query_type = 'select')
        {
        }
        /**
         * Get a count of all actions in the store, grouped by status.
         *
         * @return array Set of 'status' => int $count pairs for statuses with 1 or more actions of that status.
         */
        public function action_counts()
        {
        }
        /**
         * Cancel an action.
         *
         * @param int $action_id Action ID.
         *
         * @return void
         * @throws \InvalidArgumentException If the action update failed.
         */
        public function cancel_action($action_id)
        {
        }
        /**
         * Cancel pending actions by hook.
         *
         * @since 3.0.0
         *
         * @param string $hook Hook name.
         *
         * @return void
         */
        public function cancel_actions_by_hook($hook)
        {
        }
        /**
         * Cancel pending actions by group.
         *
         * @param string $group Group slug.
         *
         * @return void
         */
        public function cancel_actions_by_group($group)
        {
        }
        /**
         * Bulk cancel actions.
         *
         * @since 3.0.0
         *
         * @param array $query_args Query parameters.
         */
        protected function bulk_cancel_actions($query_args)
        {
        }
        /**
         * Delete an action.
         *
         * @param int $action_id Action ID.
         * @throws \InvalidArgumentException If the action deletion failed.
         */
        public function delete_action($action_id)
        {
        }
        /**
         * Get the schedule date for an action.
         *
         * @param string $action_id Action ID.
         *
         * @return \DateTime The local date the action is scheduled to run, or the date that it ran.
         */
        public function get_date($action_id)
        {
        }
        /**
         * Get the GMT schedule date for an action.
         *
         * @param int $action_id Action ID.
         *
         * @throws \InvalidArgumentException If action cannot be identified.
         * @return \DateTime The GMT date the action is scheduled to run, or the date that it ran.
         */
        protected function get_date_gmt($action_id)
        {
        }
        /**
         * Stake a claim on actions.
         *
         * @param int           $max_actions Maximum number of action to include in claim.
         * @param DateTime|null $before_date Jobs must be schedule before this date. Defaults to now.
         * @param array         $hooks Hooks to filter for.
         * @param string        $group Group to filter for.
         *
         * @return ActionScheduler_ActionClaim
         */
        public function stake_claim($max_actions = 10, ?\DateTime $before_date = \null, $hooks = array(), $group = '')
        {
        }
        /**
         * Generate a new action claim.
         *
         * @return int Claim ID.
         */
        protected function generate_claim_id()
        {
        }
        /**
         * Set a claim filter.
         *
         * @param string $filter_name Claim filter name.
         * @param mixed  $filter_values Values to filter.
         * @return void
         */
        public function set_claim_filter($filter_name, $filter_values)
        {
        }
        /**
         * Get the claim filter value.
         *
         * @param string $filter_name Claim filter name.
         * @return mixed
         */
        public function get_claim_filter($filter_name)
        {
        }
        /**
         * Mark actions claimed.
         *
         * @param string        $claim_id Claim Id.
         * @param int           $limit Number of action to include in claim.
         * @param DateTime|null $before_date Should use UTC timezone.
         * @param array         $hooks Hooks to filter for.
         * @param string        $group Group to filter for.
         *
         * @return int The number of actions that were claimed.
         * @throws \InvalidArgumentException Throws InvalidArgumentException if group doesn't exist.
         * @throws \RuntimeException Throws RuntimeException if unable to claim action.
         */
        protected function claim_actions($claim_id, $limit, ?\DateTime $before_date = \null, $hooks = array(), $group = '')
        {
        }
        /**
         * Get the number of active claims.
         *
         * @return int
         */
        public function get_claim_count()
        {
        }
        /**
         * Return an action's claim ID, as stored in the claim_id column.
         *
         * @param string $action_id Action ID.
         * @return mixed
         */
        public function get_claim_id($action_id)
        {
        }
        /**
         * Retrieve the action IDs of action in a claim.
         *
         * @param  int $claim_id Claim ID.
         * @return int[]
         */
        public function find_actions_by_claim_id($claim_id)
        {
        }
        /**
         * Release actions from a claim and delete the claim.
         *
         * @param ActionScheduler_ActionClaim $claim Claim object.
         * @throws \RuntimeException When unable to release actions from claim.
         */
        public function release_claim(\ActionScheduler_ActionClaim $claim)
        {
        }
        /**
         * Remove the claim from an action.
         *
         * @param int $action_id Action ID.
         *
         * @return void
         */
        public function unclaim_action($action_id)
        {
        }
        /**
         * Mark an action as failed.
         *
         * @param int $action_id Action ID.
         * @throws \InvalidArgumentException Throw an exception if action was not updated.
         */
        public function mark_failure($action_id)
        {
        }
        /**
         * Add execution message to action log.
         *
         * @throws Exception If the action status cannot be updated to self::STATUS_RUNNING ('in-progress').
         *
         * @param int $action_id Action ID.
         *
         * @return void
         */
        public function log_execution($action_id)
        {
        }
        /**
         * Mark an action as complete.
         *
         * @param int $action_id Action ID.
         *
         * @return void
         * @throws \InvalidArgumentException Throw an exception if action was not updated.
         */
        public function mark_complete($action_id)
        {
        }
        /**
         * Get an action's status.
         *
         * @param int $action_id Action ID.
         *
         * @return string
         * @throws \InvalidArgumentException Throw an exception if not status was found for action_id.
         * @throws \RuntimeException Throw an exception if action status could not be retrieved.
         */
        public function get_status($action_id)
        {
        }
    }
    /**
     * Class ActionScheduler_HybridStore
     *
     * A wrapper around multiple stores that fetches data from both.
     *
     * @since 3.0.0
     */
    class ActionScheduler_HybridStore extends \ActionScheduler_Store
    {
        const DEMARKATION_OPTION = 'action_scheduler_hybrid_store_demarkation';
        /**
         * Primary store instance.
         *
         * @var ActionScheduler_Store
         */
        private $primary_store;
        /**
         * Secondary store instance.
         *
         * @var ActionScheduler_Store
         */
        private $secondary_store;
        /**
         * Runner instance.
         *
         * @var Action_Scheduler\Migration\Runner
         */
        private $migration_runner;
        /**
         * The dividing line between IDs of actions created
         * by the primary and secondary stores.
         *
         * @var int
         *
         * Methods that accept an action ID will compare the ID against
         * this to determine which store will contain that ID. In almost
         * all cases, the ID should come from the primary store, but if
         * client code is bypassing the API functions and fetching IDs
         * from elsewhere, then there is a chance that an unmigrated ID
         * might be requested.
         */
        private $demarkation_id = 0;
        /**
         * ActionScheduler_HybridStore constructor.
         *
         * @param Config|null $config Migration config object.
         */
        public function __construct(?\Action_Scheduler\Migration\Config $config = \null)
        {
        }
        /**
         * Initialize the table data store tables.
         *
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
        /**
         * When the actions table is created, set its autoincrement
         * value to be one higher than the posts table to ensure that
         * there are no ID collisions.
         *
         * @param string $table_name Table name.
         * @param string $table_suffix Suffix of table name.
         *
         * @return void
         * @codeCoverageIgnore
         */
        public function set_autoincrement($table_name, $table_suffix)
        {
        }
        /**
         * Store the demarkation id in WP options.
         *
         * @param int $id The ID to set as the demarkation point between the two stores
         *                Leave null to use the next ID from the WP posts table.
         *
         * @return int The new ID.
         *
         * @codeCoverageIgnore
         */
        private function set_demarkation_id($id = \null)
        {
        }
        /**
         * Find the first matching action from the secondary store.
         * If it exists, migrate it to the primary store immediately.
         * After it migrates, the secondary store will logically contain
         * the next matching action, so return the result thence.
         *
         * @param string $hook Action's hook.
         * @param array  $params Action's arguments.
         *
         * @return string
         */
        public function find_action($hook, $params = array())
        {
        }
        /**
         * Find actions matching the query in the secondary source first.
         * If any are found, migrate them immediately. Then the secondary
         * store will contain the canonical results.
         *
         * @param array  $query Query arguments.
         * @param string $query_type Whether to select or count the results. Default, select.
         *
         * @return int[]
         */
        public function query_actions($query = array(), $query_type = 'select')
        {
        }
        /**
         * Get a count of all actions in the store, grouped by status
         *
         * @return array Set of 'status' => int $count pairs for statuses with 1 or more actions of that status.
         */
        public function action_counts()
        {
        }
        /**
         * If any actions would have been claimed by the secondary store,
         * migrate them immediately, then ask the primary store for the
         * canonical claim.
         *
         * @param int           $max_actions Maximum number of actions to claim.
         * @param null|DateTime $before_date Latest timestamp of actions to claim.
         * @param string[]      $hooks Hook of actions to claim.
         * @param string        $group Group of actions to claim.
         *
         * @return ActionScheduler_ActionClaim
         */
        public function stake_claim($max_actions = 10, ?\DateTime $before_date = \null, $hooks = array(), $group = '')
        {
        }
        /**
         * Migrate a list of actions to the table data store.
         *
         * @param array $action_ids List of action IDs.
         */
        private function migrate($action_ids)
        {
        }
        /**
         * Save an action to the primary store.
         *
         * @param ActionScheduler_Action $action Action object to be saved.
         * @param DateTime|null          $date Optional. Schedule date. Default null.
         *
         * @return int The action ID
         */
        public function save_action(\ActionScheduler_Action $action, ?\DateTime $date = \null)
        {
        }
        /**
         * Retrieve an existing action whether migrated or not.
         *
         * @param int $action_id Action ID.
         */
        public function fetch_action($action_id)
        {
        }
        /**
         * Cancel an existing action whether migrated or not.
         *
         * @param int $action_id Action ID.
         */
        public function cancel_action($action_id)
        {
        }
        /**
         * Delete an existing action whether migrated or not.
         *
         * @param int $action_id Action ID.
         */
        public function delete_action($action_id)
        {
        }
        /**
         * Get the schedule date an existing action whether migrated or not.
         *
         * @param int $action_id Action ID.
         */
        public function get_date($action_id)
        {
        }
        /**
         * Mark an existing action as failed whether migrated or not.
         *
         * @param int $action_id Action ID.
         */
        public function mark_failure($action_id)
        {
        }
        /**
         * Log the execution of an existing action whether migrated or not.
         *
         * @param int $action_id Action ID.
         */
        public function log_execution($action_id)
        {
        }
        /**
         * Mark an existing action complete whether migrated or not.
         *
         * @param int $action_id Action ID.
         */
        public function mark_complete($action_id)
        {
        }
        /**
         * Get an existing action status whether migrated or not.
         *
         * @param int $action_id Action ID.
         */
        public function get_status($action_id)
        {
        }
        /**
         * Return which store an action is stored in.
         *
         * @param int  $action_id ID of the action.
         * @param bool $primary_first Optional flag indicating search the primary store first.
         * @return ActionScheduler_Store
         */
        protected function get_store_from_action_id($action_id, $primary_first = \false)
        {
        }
        /**
         * * * * * * * * * * * * * * * * * * * * * * * * * * *
         * All claim-related functions should operate solely
         * on the primary store.
         * * * * * * * * * * * * * * * * * * * * * * * * * * *
         */
        /**
         * Get the claim count from the table data store.
         */
        public function get_claim_count()
        {
        }
        /**
         * Retrieve the claim ID for an action from the table data store.
         *
         * @param int $action_id Action ID.
         */
        public function get_claim_id($action_id)
        {
        }
        /**
         * Release a claim in the table data store.
         *
         * @param ActionScheduler_ActionClaim $claim Claim object.
         */
        public function release_claim(\ActionScheduler_ActionClaim $claim)
        {
        }
        /**
         * Release claims on an action in the table data store.
         *
         * @param int $action_id Action ID.
         */
        public function unclaim_action($action_id)
        {
        }
        /**
         * Retrieve a list of action IDs by claim.
         *
         * @param int $claim_id Claim ID.
         */
        public function find_actions_by_claim_id($claim_id)
        {
        }
    }
    /**
     * Class ActionScheduler_wpCommentLogger
     */
    class ActionScheduler_wpCommentLogger extends \ActionScheduler_Logger
    {
        const AGENT = 'ActionScheduler';
        const TYPE = 'action_log';
        /**
         * Create log entry.
         *
         * @param string        $action_id Action ID.
         * @param string        $message   Action log's message.
         * @param DateTime|null $date      Action log's timestamp.
         *
         * @return string The log entry ID
         */
        public function log($action_id, $message, ?\DateTime $date = \null)
        {
        }
        /**
         * Create comment.
         *
         * @param int      $action_id Action ID.
         * @param string   $message Action log's message.
         * @param DateTime $date Action log entry's timestamp.
         */
        protected function create_wp_comment($action_id, $message, \DateTime $date)
        {
        }
        /**
         * Get single log entry for action.
         *
         * @param string $entry_id Entry ID.
         *
         * @return ActionScheduler_LogEntry
         */
        public function get_entry($entry_id)
        {
        }
        /**
         * Get action's logs.
         *
         * @param string $action_id Action ID.
         *
         * @return ActionScheduler_LogEntry[]
         */
        public function get_logs($action_id)
        {
        }
        /**
         * Get comment.
         *
         * @param int $comment_id Comment ID.
         */
        protected function get_comment($comment_id)
        {
        }
        /**
         * Filter comment queries.
         *
         * @param WP_Comment_Query $query Comment query object.
         */
        public function filter_comment_queries($query)
        {
        }
        /**
         * Filter comment queries.
         *
         * @param array            $clauses Query's clauses.
         * @param WP_Comment_Query $query Query object.
         *
         * @return array
         */
        public function filter_comment_query_clauses($clauses, $query)
        {
        }
        /**
         * Make sure Action Scheduler logs are excluded from comment feeds, which use WP_Query, not
         * the WP_Comment_Query class handled by @see self::filter_comment_queries().
         *
         * @param string   $where Query's `where` clause.
         * @param WP_Query $query Query object.
         *
         * @return string
         */
        public function filter_comment_feed($where, $query)
        {
        }
        /**
         * Return a SQL clause to exclude Action Scheduler comments.
         *
         * @return string
         */
        protected function get_where_clause()
        {
        }
        /**
         * Remove action log entries from wp_count_comments()
         *
         * @param array $stats   Comment count.
         * @param int   $post_id Post ID.
         *
         * @return object
         */
        public function filter_comment_count($stats, $post_id)
        {
        }
        /**
         * Retrieve the comment counts from our cache, or the database if the cached version isn't set.
         *
         * @return object
         */
        protected function get_comment_count()
        {
        }
        /**
         * Delete comment count cache whenever there is new comment or the status of a comment changes. Cache
         * will be regenerated next time ActionScheduler_wpCommentLogger::filter_comment_count() is called.
         */
        public function delete_comment_count_cache()
        {
        }
        /**
         * Initialize.
         *
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
        /**
         * Defer comment counting.
         */
        public function disable_comment_counting()
        {
        }
        /**
         * Enable comment counting.
         */
        public function enable_comment_counting()
        {
        }
    }
    /**
     * Class ActionScheduler_wpPostStore
     */
    class ActionScheduler_wpPostStore extends \ActionScheduler_Store
    {
        const POST_TYPE = 'scheduled-action';
        const GROUP_TAXONOMY = 'action-group';
        const SCHEDULE_META_KEY = '_action_manager_schedule';
        const DEPENDENCIES_MET = 'as-post-store-dependencies-met';
        /**
         * Used to share information about the before_date property of claims internally.
         *
         * This is used in preference to passing the same information as a method param
         * for backwards-compatibility reasons.
         *
         * @var DateTime|null
         */
        private $claim_before_date = \null;
        /**
         * Local Timezone.
         *
         * @var DateTimeZone
         */
        protected $local_timezone = \null;
        /**
         * Save action.
         *
         * @param ActionScheduler_Action $action Scheduled Action.
         * @param DateTime|null          $scheduled_date Scheduled Date.
         *
         * @throws RuntimeException Throws an exception if the action could not be saved.
         * @return int
         */
        public function save_action(\ActionScheduler_Action $action, ?\DateTime $scheduled_date = \null)
        {
        }
        /**
         * Create post array.
         *
         * @param ActionScheduler_Action $action Scheduled Action.
         * @param DateTime|null          $scheduled_date Scheduled Date.
         *
         * @return array Returns an array of post data.
         */
        protected function create_post_array(\ActionScheduler_Action $action, ?\DateTime $scheduled_date = \null)
        {
        }
        /**
         * Save post array.
         *
         * @param array $post_array Post array.
         * @return int Returns the post ID.
         * @throws RuntimeException Throws an exception if the action could not be saved.
         */
        protected function save_post_array($post_array)
        {
        }
        /**
         * Filter insert post data.
         *
         * @param array $postdata Post data to filter.
         *
         * @return array
         */
        public function filter_insert_post_data($postdata)
        {
        }
        /**
         * Create a (probably unique) post name for scheduled actions in a more performant manner than wp_unique_post_slug().
         *
         * When an action's post status is transitioned to something other than 'draft', 'pending' or 'auto-draft, like 'publish'
         * or 'failed' or 'trash', WordPress will find a unique slug (stored in post_name column) using the wp_unique_post_slug()
         * function. This is done to ensure URL uniqueness. The approach taken by wp_unique_post_slug() is to iterate over existing
         * post_name values that match, and append a number 1 greater than the largest. This makes sense when manually creating a
         * post from the Edit Post screen. It becomes a bottleneck when automatically processing thousands of actions, with a
         * database containing thousands of related post_name values.
         *
         * WordPress 5.1 introduces the 'pre_wp_unique_post_slug' filter for plugins to address this issue.
         *
         * We can short-circuit WordPress's wp_unique_post_slug() approach using the 'pre_wp_unique_post_slug' filter. This
         * method is available to be used as a callback on that filter. It provides a more scalable approach to generating a
         * post_name/slug that is probably unique. Because Action Scheduler never actually uses the post_name field, or an
         * action's slug, being probably unique is good enough.
         *
         * For more backstory on this issue, see:
         * - https://github.com/woocommerce/action-scheduler/issues/44 and
         * - https://core.trac.wordpress.org/ticket/21112
         *
         * @param string $override_slug Short-circuit return value.
         * @param string $slug          The desired slug (post_name).
         * @param int    $post_ID       Post ID.
         * @param string $post_status   The post status.
         * @param string $post_type     Post type.
         * @return string
         */
        public function set_unique_post_slug($override_slug, $slug, $post_ID, $post_status, $post_type)
        {
        }
        /**
         * Save post schedule.
         *
         * @param int    $post_id  Post ID of the scheduled action.
         * @param string $schedule Schedule to save.
         *
         * @return void
         */
        protected function save_post_schedule($post_id, $schedule)
        {
        }
        /**
         * Save action group.
         *
         * @param int    $post_id Post ID.
         * @param string $group   Group to save.
         * @return void
         */
        protected function save_action_group($post_id, $group)
        {
        }
        /**
         * Fetch actions.
         *
         * @param int $action_id Action ID.
         * @return object
         */
        public function fetch_action($action_id)
        {
        }
        /**
         * Get post.
         *
         * @param string $action_id - Action ID.
         * @return WP_Post|null
         */
        protected function get_post($action_id)
        {
        }
        /**
         * Get NULL action.
         *
         * @return ActionScheduler_NullAction
         */
        protected function get_null_action()
        {
        }
        /**
         * Make action from post.
         *
         * @param WP_Post $post Post object.
         * @return WP_Post
         */
        protected function make_action_from_post($post)
        {
        }
        /**
         * Get action status by post status.
         *
         * @param string $post_status Post status.
         *
         * @throws InvalidArgumentException Throw InvalidArgumentException if $post_status not in known status fields returned by $this->get_status_labels().
         * @return string
         */
        protected function get_action_status_by_post_status($post_status)
        {
        }
        /**
         * Get post status by action status.
         *
         * @param string $action_status Action status.
         *
         * @throws InvalidArgumentException Throws InvalidArgumentException if $post_status not in known status fields returned by $this->get_status_labels().
         * @return string
         */
        protected function get_post_status_by_action_status($action_status)
        {
        }
        /**
         * Returns the SQL statement to query (or count) actions.
         *
         * @param array  $query            - Filtering options.
         * @param string $select_or_count  - Whether the SQL should select and return the IDs or just the row count.
         *
         * @throws InvalidArgumentException - Throw InvalidArgumentException if $select_or_count not count or select.
         * @return string SQL statement. The returned SQL is already properly escaped.
         */
        protected function get_query_actions_sql(array $query, $select_or_count = 'select')
        {
        }
        /**
         * Query for action count or list of action IDs.
         *
         * @since 3.3.0 $query['status'] accepts array of statuses instead of a single status.
         *
         * @see ActionScheduler_Store::query_actions for $query arg usage.
         *
         * @param array  $query      Query filtering options.
         * @param string $query_type Whether to select or count the results. Defaults to select.
         *
         * @return string|array|null The IDs of actions matching the query. Null on failure.
         */
        public function query_actions($query = array(), $query_type = 'select')
        {
        }
        /**
         * Get a count of all actions in the store, grouped by status
         *
         * @return array
         */
        public function action_counts()
        {
        }
        /**
         * Cancel action.
         *
         * @param int $action_id Action ID.
         *
         * @throws InvalidArgumentException If $action_id is not identified.
         */
        public function cancel_action($action_id)
        {
        }
        /**
         * Delete action.
         *
         * @param int $action_id Action ID.
         * @return void
         * @throws InvalidArgumentException If action is not identified.
         */
        public function delete_action($action_id)
        {
        }
        /**
         * Get date for claim id.
         *
         * @param int $action_id Action ID.
         * @return ActionScheduler_DateTime The date the action is schedule to run, or the date that it ran.
         */
        public function get_date($action_id)
        {
        }
        /**
         * Get Date GMT.
         *
         * @param int $action_id Action ID.
         *
         * @throws InvalidArgumentException If $action_id is not identified.
         * @return ActionScheduler_DateTime The date the action is schedule to run, or the date that it ran.
         */
        public function get_date_gmt($action_id)
        {
        }
        /**
         * Stake claim.
         *
         * @param int           $max_actions Maximum number of actions.
         * @param DateTime|null $before_date Jobs must be schedule before this date. Defaults to now.
         * @param array         $hooks       Claim only actions with a hook or hooks.
         * @param string        $group       Claim only actions in the given group.
         *
         * @return ActionScheduler_ActionClaim
         * @throws RuntimeException When there is an error staking a claim.
         * @throws InvalidArgumentException When the given group is not valid.
         */
        public function stake_claim($max_actions = 10, ?\DateTime $before_date = \null, $hooks = array(), $group = '')
        {
        }
        /**
         * Get claim count.
         *
         * @return int
         */
        public function get_claim_count()
        {
        }
        /**
         * Generate claim id.
         *
         * @return string
         */
        protected function generate_claim_id()
        {
        }
        /**
         * Claim actions.
         *
         * @param string        $claim_id    Claim ID.
         * @param int           $limit       Limit.
         * @param DateTime|null $before_date Should use UTC timezone.
         * @param array         $hooks       Claim only actions with a hook or hooks.
         * @param string        $group       Claim only actions in the given group.
         *
         * @return int The number of actions that were claimed.
         * @throws RuntimeException  When there is a database error.
         */
        protected function claim_actions($claim_id, $limit, ?\DateTime $before_date = \null, $hooks = array(), $group = '')
        {
        }
        /**
         * Get IDs of actions within a certain group and up to a certain date/time.
         *
         * @param string   $group The group to use in finding actions.
         * @param int      $limit The number of actions to retrieve.
         * @param DateTime $date  DateTime object representing cutoff time for actions. Actions retrieved will be
         *                        up to and including this DateTime.
         *
         * @return array IDs of actions in the appropriate group and before the appropriate time.
         * @throws InvalidArgumentException When the group does not exist.
         */
        protected function get_actions_by_group($group, $limit, \DateTime $date)
        {
        }
        /**
         * Find actions by claim ID.
         *
         * @param string $claim_id Claim ID.
         * @return array
         */
        public function find_actions_by_claim_id($claim_id)
        {
        }
        /**
         * Release claim.
         *
         * @param ActionScheduler_ActionClaim $claim Claim object to release.
         * @return void
         * @throws RuntimeException When the claim is not unlocked.
         */
        public function release_claim(\ActionScheduler_ActionClaim $claim)
        {
        }
        /**
         * Unclaim action.
         *
         * @param string $action_id Action ID.
         * @throws RuntimeException When unable to unlock claim on action ID.
         */
        public function unclaim_action($action_id)
        {
        }
        /**
         * Mark failure on action.
         *
         * @param int $action_id Action ID.
         *
         * @return void
         * @throws RuntimeException When unable to mark failure on action ID.
         */
        public function mark_failure($action_id)
        {
        }
        /**
         * Return an action's claim ID, as stored in the post password column
         *
         * @param int $action_id Action ID.
         * @return mixed
         */
        public function get_claim_id($action_id)
        {
        }
        /**
         * Return an action's status, as stored in the post status column
         *
         * @param int $action_id Action ID.
         *
         * @return mixed
         * @throws InvalidArgumentException When the action ID is invalid.
         */
        public function get_status($action_id)
        {
        }
        /**
         * Get post column
         *
         * @param string $action_id Action ID.
         * @param string $column_name Column Name.
         *
         * @return string|null
         */
        private function get_post_column($action_id, $column_name)
        {
        }
        /**
         * Log Execution.
         *
         * @throws Exception If the action status cannot be updated to self::STATUS_RUNNING ('in-progress').
         *
         * @param string $action_id Action ID.
         */
        public function log_execution($action_id)
        {
        }
        /**
         * Record that an action was completed.
         *
         * @param string $action_id ID of the completed action.
         *
         * @throws InvalidArgumentException When the action ID is invalid.
         * @throws RuntimeException         When there was an error executing the action.
         */
        public function mark_complete($action_id)
        {
        }
        /**
         * Mark action as migrated when there is an error deleting the action.
         *
         * @param int $action_id Action ID.
         */
        public function mark_migrated($action_id)
        {
        }
        /**
         * Determine whether the post store can be migrated.
         *
         * @param [type] $setting - Setting value.
         * @return bool
         */
        public function migration_dependencies_met($setting)
        {
        }
        /**
         * InnoDB indexes have a maximum size of 767 bytes by default, which is only 191 characters with utf8mb4.
         *
         * Previously, AS wasn't concerned about args length, as we used the (unindex) post_content column. However,
         * as we prepare to move to custom tables, and can use an indexed VARCHAR column instead, we want to warn
         * developers of this impending requirement.
         *
         * @param ActionScheduler_Action $action Action object.
         */
        protected function validate_action(\ActionScheduler_Action $action)
        {
        }
        /**
         * (@codeCoverageIgnore)
         */
        public function init()
        {
        }
    }
    /**
     * Class ActionScheduler_wpPostStore_PostStatusRegistrar
     *
     * @codeCoverageIgnore
     */
    class ActionScheduler_wpPostStore_PostStatusRegistrar
    {
        /**
         * Registrar.
         */
        public function register()
        {
        }
        /**
         * Build the args array for the post type definition
         *
         * @return array
         */
        protected function post_status_args()
        {
        }
        /**
         * Build the args array for the post type definition
         *
         * @return array
         */
        protected function post_status_failed_labels()
        {
        }
        /**
         * Build the args array for the post type definition
         *
         * @return array
         */
        protected function post_status_running_labels()
        {
        }
    }
    /**
     * Class ActionScheduler_wpPostStore_PostTypeRegistrar
     *
     * @codeCoverageIgnore
     */
    class ActionScheduler_wpPostStore_PostTypeRegistrar
    {
        /**
         * Registrar.
         */
        public function register()
        {
        }
        /**
         * Build the args array for the post type definition
         *
         * @return array
         */
        protected function post_type_args()
        {
        }
    }
    /**
     * Class ActionScheduler_wpPostStore_TaxonomyRegistrar
     *
     * @codeCoverageIgnore
     */
    class ActionScheduler_wpPostStore_TaxonomyRegistrar
    {
        /**
         * Registrar.
         */
        public function register()
        {
        }
        /**
         * Get taxonomy arguments.
         */
        protected function taxonomy_args()
        {
        }
    }
}
namespace Action_Scheduler\Migration {
    /**
     * Class ActionMigrator
     *
     * @package Action_Scheduler\Migration
     *
     * @since 3.0.0
     *
     * @codeCoverageIgnore
     */
    class ActionMigrator
    {
        /**
         * Source store instance.
         *
         * @var ActionScheduler_Store
         */
        private $source;
        /**
         * Destination store instance.
         *
         * @var ActionScheduler_Store
         */
        private $destination;
        /**
         * LogMigrator instance.
         *
         * @var LogMigrator
         */
        private $log_migrator;
        /**
         * ActionMigrator constructor.
         *
         * @param \ActionScheduler_Store $source_store Source store object.
         * @param \ActionScheduler_Store $destination_store Destination store object.
         * @param LogMigrator            $log_migrator Log migrator object.
         */
        public function __construct(\ActionScheduler_Store $source_store, \ActionScheduler_Store $destination_store, \Action_Scheduler\Migration\LogMigrator $log_migrator)
        {
        }
        /**
         * Migrate an action.
         *
         * @param int $source_action_id Action ID.
         *
         * @return int 0|new action ID
         * @throws \RuntimeException When unable to delete action from the source store.
         */
        public function migrate($source_action_id)
        {
        }
    }
}
namespace {
    /**
     * Class ActionScheduler_DBStoreMigrator
     *
     * A class for direct saving of actions to the table data store during migration.
     *
     * @since 3.0.0
     */
    class ActionScheduler_DBStoreMigrator extends \ActionScheduler_DBStore
    {
        /**
         * Save an action with optional last attempt date.
         *
         * Normally, saving an action sets its attempted date to 0000-00-00 00:00:00 because when an action is first saved,
         * it can't have been attempted yet, but migrated completed actions will have an attempted date, so we need to save
         * that when first saving the action.
         *
         * @param ActionScheduler_Action $action Action to migrate.
         * @param null|DateTime          $scheduled_date Optional date of the first instance to store.
         * @param null|DateTime          $last_attempt_date Optional date the action was last attempted.
         *
         * @return string The action ID
         * @throws \RuntimeException When the action is not saved.
         */
        public function save_action(\ActionScheduler_Action $action, ?\DateTime $scheduled_date = \null, ?\DateTime $last_attempt_date = \null)
        {
        }
    }
}
namespace Action_Scheduler\Migration {
    /**
     * Class BatchFetcher
     *
     * @package Action_Scheduler\Migration
     *
     * @since 3.0.0
     *
     * @codeCoverageIgnore
     */
    class BatchFetcher
    {
        /**
         * Store instance.
         *
         * @var ActionScheduler_Store
         */
        private $store;
        /**
         * BatchFetcher constructor.
         *
         * @param ActionScheduler_Store $source_store Source store object.
         */
        public function __construct(\ActionScheduler_Store $source_store)
        {
        }
        /**
         * Retrieve a list of actions.
         *
         * @param int $count The number of actions to retrieve.
         *
         * @return int[] A list of action IDs
         */
        public function fetch($count = 10)
        {
        }
        /**
         * Generate a list of prioritized of action search parameters.
         *
         * @param int $count Number of actions to find.
         *
         * @return array
         */
        private function get_query_strategies($count)
        {
        }
    }
    /**
     * Class Config
     *
     * @package Action_Scheduler\Migration
     *
     * @since 3.0.0
     *
     * A config builder for the ActionScheduler\Migration\Runner class
     */
    class Config
    {
        /**
         * Source store instance.
         *
         * @var ActionScheduler_Store
         */
        private $source_store;
        /**
         * Source logger instance.
         *
         * @var ActionScheduler_Logger
         */
        private $source_logger;
        /**
         * Destination store instance.
         *
         * @var ActionScheduler_Store
         */
        private $destination_store;
        /**
         * Destination logger instance.
         *
         * @var ActionScheduler_Logger
         */
        private $destination_logger;
        /**
         * Progress bar object.
         *
         * @var Action_Scheduler\WP_CLI\ProgressBar
         */
        private $progress_bar;
        /**
         * Flag indicating a dryrun.
         *
         * @var bool
         */
        private $dry_run = false;
        /**
         * Config constructor.
         */
        public function __construct()
        {
        }
        /**
         * Get the configured source store.
         *
         * @return ActionScheduler_Store
         * @throws \RuntimeException When source store is not configured.
         */
        public function get_source_store()
        {
        }
        /**
         * Set the configured source store.
         *
         * @param ActionScheduler_Store $store Source store object.
         */
        public function set_source_store(\ActionScheduler_Store $store)
        {
        }
        /**
         * Get the configured source logger.
         *
         * @return ActionScheduler_Logger
         * @throws \RuntimeException When source logger is not configured.
         */
        public function get_source_logger()
        {
        }
        /**
         * Set the configured source logger.
         *
         * @param ActionScheduler_Logger $logger Logger object.
         */
        public function set_source_logger(\ActionScheduler_Logger $logger)
        {
        }
        /**
         * Get the configured destination store.
         *
         * @return ActionScheduler_Store
         * @throws \RuntimeException When destination store is not configured.
         */
        public function get_destination_store()
        {
        }
        /**
         * Set the configured destination store.
         *
         * @param ActionScheduler_Store $store Action store object.
         */
        public function set_destination_store(\ActionScheduler_Store $store)
        {
        }
        /**
         * Get the configured destination logger.
         *
         * @return ActionScheduler_Logger
         * @throws \RuntimeException When destination logger is not configured.
         */
        public function get_destination_logger()
        {
        }
        /**
         * Set the configured destination logger.
         *
         * @param ActionScheduler_Logger $logger Logger object.
         */
        public function set_destination_logger(\ActionScheduler_Logger $logger)
        {
        }
        /**
         * Get flag indicating whether it's a dry run.
         *
         * @return bool
         */
        public function get_dry_run()
        {
        }
        /**
         * Set flag indicating whether it's a dry run.
         *
         * @param bool $dry_run Dry run toggle.
         */
        public function set_dry_run($dry_run)
        {
        }
        /**
         * Get progress bar object.
         *
         * @return ActionScheduler\WPCLI\ProgressBar
         */
        public function get_progress_bar()
        {
        }
        /**
         * Set progress bar object.
         *
         * @param ActionScheduler\WPCLI\ProgressBar $progress_bar Progress bar object.
         */
        public function set_progress_bar(\Action_Scheduler\WP_CLI\ProgressBar $progress_bar)
        {
        }
    }
    /**
     * Class Controller
     *
     * The main plugin/initialization class for migration to custom tables.
     *
     * @package Action_Scheduler\Migration
     *
     * @since 3.0.0
     *
     * @codeCoverageIgnore
     */
    class Controller
    {
        /**
         * Instance.
         *
         * @var self
         */
        private static $instance;
        /**
         * Scheduler instance.
         *
         * @var Action_Scheduler\Migration\Scheduler
         */
        private $migration_scheduler;
        /**
         * Class name of the store object.
         *
         * @var string
         */
        private $store_classname;
        /**
         * Class name of the logger object.
         *
         * @var string
         */
        private $logger_classname;
        /**
         * Flag to indicate migrating custom store.
         *
         * @var bool
         */
        private $migrate_custom_store;
        /**
         * Controller constructor.
         *
         * @param Scheduler $migration_scheduler Migration scheduler object.
         */
        protected function __construct(\Action_Scheduler\Migration\Scheduler $migration_scheduler)
        {
        }
        /**
         * Set the action store class name.
         *
         * @param string $class Classname of the store class.
         *
         * @return string
         */
        public function get_store_class($class)
        {
        }
        /**
         * Set the action logger class name.
         *
         * @param string $class Classname of the logger class.
         *
         * @return string
         */
        public function get_logger_class($class)
        {
        }
        /**
         * Get flag indicating whether a custom datastore is in use.
         *
         * @return bool
         */
        public function has_custom_datastore()
        {
        }
        /**
         * Set up the background migration process.
         *
         * @return void
         */
        public function schedule_migration()
        {
        }
        /**
         * Get the default migration config object
         *
         * @return ActionScheduler\Migration\Config
         */
        public function get_migration_config_object()
        {
        }
        /**
         * Hook dashboard migration notice.
         */
        public function hook_admin_notices()
        {
        }
        /**
         * Show a dashboard notice that migration is in progress.
         */
        public function display_migration_notice()
        {
        }
        /**
         * Add store classes. Hook migration.
         */
        private function hook()
        {
        }
        /**
         * Possibly hook the migration scheduler action.
         */
        public function maybe_hook_migration()
        {
        }
        /**
         * Allow datastores to enable migration to AS tables.
         */
        public function allow_migration()
        {
        }
        /**
         * Proceed with the migration if the dependencies have been met.
         */
        public static function init()
        {
        }
        /**
         * Singleton factory.
         */
        public static function instance()
        {
        }
    }
    /**
     * Class DryRun_ActionMigrator
     *
     * @package Action_Scheduler\Migration
     *
     * @since 3.0.0
     *
     * @codeCoverageIgnore
     */
    class DryRun_ActionMigrator extends \Action_Scheduler\Migration\ActionMigrator
    {
        /**
         * Simulate migrating an action.
         *
         * @param int $source_action_id Action ID.
         *
         * @return int
         */
        public function migrate($source_action_id)
        {
        }
    }
    /**
     * Class LogMigrator
     *
     * @package Action_Scheduler\Migration
     *
     * @since 3.0.0
     *
     * @codeCoverageIgnore
     */
    class LogMigrator
    {
        /**
         * Source logger instance.
         *
         * @var ActionScheduler_Logger
         */
        private $source;
        /**
         * Destination logger instance.
         *
         * @var ActionScheduler_Logger
         */
        private $destination;
        /**
         * ActionMigrator constructor.
         *
         * @param ActionScheduler_Logger $source_logger Source logger object.
         * @param ActionScheduler_Logger $destination_logger Destination logger object.
         */
        public function __construct(\ActionScheduler_Logger $source_logger, \ActionScheduler_Logger $destination_logger)
        {
        }
        /**
         * Migrate an action log.
         *
         * @param int $source_action_id Source logger object.
         * @param int $destination_action_id Destination logger object.
         */
        public function migrate($source_action_id, $destination_action_id)
        {
        }
    }
    /**
     * Class DryRun_LogMigrator
     *
     * @package Action_Scheduler\Migration
     *
     * @codeCoverageIgnore
     */
    class DryRun_LogMigrator extends \Action_Scheduler\Migration\LogMigrator
    {
        /**
         * Simulate migrating an action log.
         *
         * @param int $source_action_id Source logger object.
         * @param int $destination_action_id Destination logger object.
         */
        public function migrate($source_action_id, $destination_action_id)
        {
        }
    }
    /**
     * Class Runner
     *
     * @package Action_Scheduler\Migration
     *
     * @since 3.0.0
     *
     * @codeCoverageIgnore
     */
    class Runner
    {
        /**
         * Source store instance.
         *
         * @var ActionScheduler_Store
         */
        private $source_store;
        /**
         * Destination store instance.
         *
         * @var ActionScheduler_Store
         */
        private $destination_store;
        /**
         * Source logger instance.
         *
         * @var ActionScheduler_Logger
         */
        private $source_logger;
        /**
         * Destination logger instance.
         *
         * @var ActionScheduler_Logger
         */
        private $destination_logger;
        /**
         * Batch fetcher instance.
         *
         * @var BatchFetcher
         */
        private $batch_fetcher;
        /**
         * Action migrator instance.
         *
         * @var ActionMigrator
         */
        private $action_migrator;
        /**
         * Log migrator instance.
         *
         * @var LogMigrator
         */
        private $log_migrator;
        /**
         * Progress bar instance.
         *
         * @var ProgressBar
         */
        private $progress_bar;
        /**
         * Runner constructor.
         *
         * @param Config $config Migration configuration object.
         */
        public function __construct(\Action_Scheduler\Migration\Config $config)
        {
        }
        /**
         * Run migration batch.
         *
         * @param int $batch_size Optional batch size. Default 10.
         *
         * @return int Size of batch processed.
         */
        public function run($batch_size = 10)
        {
        }
        /**
         * Migration a batch of actions.
         *
         * @param array $action_ids List of action IDs to migrate.
         */
        public function migrate_actions(array $action_ids)
        {
        }
        /**
         * Initialize destination store and logger.
         */
        public function init_destination()
        {
        }
    }
    /**
     * Class Scheduler
     *
     * @package Action_Scheduler\WP_CLI
     *
     * @since 3.0.0
     *
     * @codeCoverageIgnore
     */
    class Scheduler
    {
        /** Migration action hook. */
        const HOOK = 'action_scheduler/migration_hook';
        /** Migration action group. */
        const GROUP = 'action-scheduler-migration';
        /**
         * Set up the callback for the scheduled job.
         */
        public function hook()
        {
        }
        /**
         * Remove the callback for the scheduled job.
         */
        public function unhook()
        {
        }
        /**
         * The migration callback.
         */
        public function run_migration()
        {
        }
        /**
         * Mark the migration complete.
         */
        public function mark_complete()
        {
        }
        /**
         * Get a flag indicating whether the migration is scheduled.
         *
         * @return bool Whether there is a pending action in the store to handle the migration
         */
        public function is_migration_scheduled()
        {
        }
        /**
         * Schedule the migration.
         *
         * @param int $when Optional timestamp to run the next migration batch. Defaults to now.
         *
         * @return string The action ID
         */
        public function schedule_migration($when = 0)
        {
        }
        /**
         * Remove the scheduled migration action.
         */
        public function unschedule_migration()
        {
        }
        /**
         * Get migration batch schedule interval.
         *
         * @return int Seconds between migration runs. Defaults to 0 seconds to allow chaining migration via Async Runners.
         */
        private function get_schedule_interval()
        {
        }
        /**
         * Get migration batch size.
         *
         * @return int Number of actions to migrate in each batch. Defaults to 250.
         */
        private function get_batch_size()
        {
        }
        /**
         * Get migration runner object.
         *
         * @return Runner
         */
        private function get_migration_runner()
        {
        }
    }
}
namespace {
    /**
     * Class ActionScheduler_SimpleSchedule
     */
    class ActionScheduler_SimpleSchedule extends \ActionScheduler_Abstract_Schedule
    {
        /**
         * Deprecated property @see $this->__wakeup() for details.
         *
         * @var null|DateTime
         */
        private $timestamp = \null;
        /**
         * Calculate when this schedule should start after a given date & time using
         * the number of seconds between recurrences.
         *
         * @param DateTime $after Timestamp.
         *
         * @return DateTime|null
         */
        public function calculate_next(\DateTime $after)
        {
        }
        /**
         * Schedule is not recurring.
         *
         * @return bool
         */
        public function is_recurring()
        {
        }
        /**
         * Serialize schedule with data required prior to AS 3.0.0
         *
         * Prior to Action Scheduler 3.0.0, schedules used different property names to refer
         * to equivalent data. For example, ActionScheduler_IntervalSchedule::start_timestamp
         * was the same as ActionScheduler_SimpleSchedule::timestamp. Action Scheduler 3.0.0
         * aligned properties and property names for better inheritance. To guard against the
         * scheduled date for single actions always being seen as "now" if downgrading to
         * Action Scheduler < 3.0.0, we need to also store the data with the old property names
         * so if it's unserialized in AS < 3.0, the schedule doesn't end up with a null recurrence.
         *
         * @return array
         */
        public function __sleep()
        {
        }
        /**
         * Unserialize recurring schedules serialized/stored prior to AS 3.0.0
         *
         * Prior to Action Scheduler 3.0.0, schedules used different property names to refer
         * to equivalent data. For example, ActionScheduler_IntervalSchedule::start_timestamp
         * was the same as ActionScheduler_SimpleSchedule::timestamp. Action Scheduler 3.0.0
         * aligned properties and property names for better inheritance. To maintain backward
         * compatibility with schedules serialized and stored prior to 3.0, we need to correctly
         * map the old property names with matching visibility.
         */
        public function __wakeup()
        {
        }
    }
    /**
     * Class ActionScheduler_SimpleSchedule
     */
    class ActionScheduler_CanceledSchedule extends \ActionScheduler_SimpleSchedule
    {
        /**
         * Deprecated property @see $this->__wakeup() for details.
         *
         * @var null
         */
        private $timestamp = \null;
        /**
         * Calculate when the next instance of this schedule would run based on a given date & time.
         *
         * @param DateTime $after Timestamp.
         *
         * @return DateTime|null
         */
        public function calculate_next(\DateTime $after)
        {
        }
        /**
         * Cancelled actions should never have a next schedule, even if get_next()
         * is called with $after < $this->scheduled_date.
         *
         * @param DateTime $after Timestamp.
         * @return DateTime|null
         */
        public function get_next(\DateTime $after)
        {
        }
        /**
         * Action is not recurring.
         *
         * @return bool
         */
        public function is_recurring()
        {
        }
        /**
         * Unserialize recurring schedules serialized/stored prior to AS 3.0.0
         *
         * Prior to Action Scheduler 3.0.0, schedules used different property names to refer
         * to equivalent data. For example, ActionScheduler_IntervalSchedule::start_timestamp
         * was the same as ActionScheduler_SimpleSchedule::timestamp. Action Scheduler 3.0.0
         * aligned properties and property names for better inheritance. To maintain backward
         * compatibility with schedules serialized and stored prior to 3.0, we need to correctly
         * map the old property names with matching visibility.
         */
        public function __wakeup()
        {
        }
    }
    /**
     * Class ActionScheduler_CronSchedule
     */
    class ActionScheduler_CronSchedule extends \ActionScheduler_Abstract_RecurringSchedule implements \ActionScheduler_Schedule
    {
        /**
         * Deprecated property @see $this->__wakeup() for details.
         *
         * @var null
         */
        private $start_timestamp = \null;
        /**
         * Deprecated property @see $this->__wakeup() for details.
         *
         * @var null
         */
        private $cron = \null;
        /**
         * Wrapper for parent constructor to accept a cron expression string and map it to a CronExpression for this
         * objects $recurrence property.
         *
         * @param DateTime              $start The date & time to run the action at or after. If $start aligns with the CronSchedule passed via $recurrence, it will be used. If it does not align, the first matching date after it will be used.
         * @param CronExpression|string $recurrence The CronExpression used to calculate the schedule's next instance.
         * @param DateTime|null         $first (Optional) The date & time the first instance of this interval schedule ran. Default null, meaning this is the first instance.
         */
        public function __construct(\DateTime $start, $recurrence, ?\DateTime $first = \null)
        {
        }
        /**
         * Calculate when an instance of this schedule would start based on a given
         * date & time using its the CronExpression.
         *
         * @param DateTime $after Timestamp.
         * @return DateTime
         */
        protected function calculate_next(\DateTime $after)
        {
        }
        /**
         * Get the schedule's recurrence.
         *
         * @return string
         */
        public function get_recurrence()
        {
        }
        /**
         * Serialize cron schedules with data required prior to AS 3.0.0
         *
         * Prior to Action Scheduler 3.0.0, recurring schedules used different property names to
         * refer to equivalent data. For example, ActionScheduler_IntervalSchedule::start_timestamp
         * was the same as ActionScheduler_SimpleSchedule::timestamp. Action Scheduler 3.0.0
         * aligned properties and property names for better inheritance. To guard against the
         * possibility of infinite loops if downgrading to Action Scheduler < 3.0.0, we need to
         * also store the data with the old property names so if it's unserialized in AS < 3.0,
         * the schedule doesn't end up with a null recurrence.
         *
         * @return array
         */
        public function __sleep()
        {
        }
        /**
         * Unserialize cron schedules serialized/stored prior to AS 3.0.0
         *
         * For more background, @see ActionScheduler_Abstract_RecurringSchedule::__wakeup().
         */
        public function __wakeup()
        {
        }
    }
    /**
     * Class ActionScheduler_IntervalSchedule
     */
    class ActionScheduler_IntervalSchedule extends \ActionScheduler_Abstract_RecurringSchedule implements \ActionScheduler_Schedule
    {
        /**
         * Deprecated property @see $this->__wakeup() for details.
         *
         * @var null
         */
        private $start_timestamp = \null;
        /**
         * Deprecated property @see $this->__wakeup() for details.
         *
         * @var null
         */
        private $interval_in_seconds = \null;
        /**
         * Calculate when this schedule should start after a given date & time using
         * the number of seconds between recurrences.
         *
         * @param DateTime $after Timestamp.
         * @return DateTime
         */
        protected function calculate_next(\DateTime $after)
        {
        }
        /**
         * Schedule interval in seconds.
         *
         * @return int
         */
        public function interval_in_seconds()
        {
        }
        /**
         * Serialize interval schedules with data required prior to AS 3.0.0
         *
         * Prior to Action Scheduler 3.0.0, recurring schedules used different property names to
         * refer to equivalent data. For example, ActionScheduler_IntervalSchedule::start_timestamp
         * was the same as ActionScheduler_SimpleSchedule::timestamp. Action Scheduler 3.0.0
         * aligned properties and property names for better inheritance. To guard against the
         * possibility of infinite loops if downgrading to Action Scheduler < 3.0.0, we need to
         * also store the data with the old property names so if it's unserialized in AS < 3.0,
         * the schedule doesn't end up with a null/false/0 recurrence.
         *
         * @return array
         */
        public function __sleep()
        {
        }
        /**
         * Unserialize interval schedules serialized/stored prior to AS 3.0.0
         *
         * For more background, @see ActionScheduler_Abstract_RecurringSchedule::__wakeup().
         */
        public function __wakeup()
        {
        }
    }
    /**
     * Class ActionScheduler_NullSchedule
     */
    class ActionScheduler_NullSchedule extends \ActionScheduler_SimpleSchedule
    {
        /**
         * DateTime instance.
         *
         * @var DateTime|null
         */
        protected $scheduled_date;
        /**
         * Make the $date param optional and default to null.
         *
         * @param null|DateTime $date The date & time to run the action.
         */
        public function __construct(?\DateTime $date = \null)
        {
        }
        /**
         * This schedule has no scheduled DateTime, so we need to override the parent __sleep().
         *
         * @return array
         */
        public function __sleep()
        {
        }
        /**
         * Wakeup.
         */
        public function __wakeup()
        {
        }
    }
    /**
     * Class ActionScheduler_LoggerSchema
     *
     * @codeCoverageIgnore
     *
     * Creates a custom table for storing action logs
     */
    class ActionScheduler_LoggerSchema extends \ActionScheduler_Abstract_Schema
    {
        const LOG_TABLE = 'actionscheduler_logs';
        /**
         * Schema version.
         *
         * Increment this value to trigger a schema update.
         *
         * @var int
         */
        protected $schema_version = 3;
        /**
         * Construct.
         */
        public function __construct()
        {
        }
        /**
         * Performs additional setup work required to support this schema.
         */
        public function init()
        {
        }
        /**
         * Get table definition.
         *
         * @param string $table Table name.
         */
        protected function get_table_definition($table)
        {
        }
        /**
         * Update the logs table schema, allowing datetime fields to be NULL.
         *
         * This is needed because the NOT NULL constraint causes a conflict with some versions of MySQL
         * configured with sql_mode=NO_ZERO_DATE, which can for instance lead to tables not being created.
         *
         * Most other schema updates happen via ActionScheduler_Abstract_Schema::update_table(), however
         * that method relies on dbDelta() and this change is not possible when using that function.
         *
         * @param string $table Name of table being updated.
         * @param string $db_version The existing schema version of the table.
         */
        public function update_schema_3_0($table, $db_version)
        {
        }
    }
    /**
     * Class ActionScheduler_StoreSchema
     *
     * @codeCoverageIgnore
     *
     * Creates custom tables for storing scheduled actions
     */
    class ActionScheduler_StoreSchema extends \ActionScheduler_Abstract_Schema
    {
        const ACTIONS_TABLE = 'actionscheduler_actions';
        const CLAIMS_TABLE = 'actionscheduler_claims';
        const GROUPS_TABLE = 'actionscheduler_groups';
        const DEFAULT_DATE = '0000-00-00 00:00:00';
        /**
         * Schema version.
         *
         * Increment this value to trigger a schema update.
         *
         * @var int
         */
        protected $schema_version = 7;
        /**
         * Construct.
         */
        public function __construct()
        {
        }
        /**
         * Performs additional setup work required to support this schema.
         */
        public function init()
        {
        }
        /**
         * Get table definition.
         *
         * @param string $table Table name.
         */
        protected function get_table_definition($table)
        {
        }
        /**
         * Update the actions table schema, allowing datetime fields to be NULL.
         *
         * This is needed because the NOT NULL constraint causes a conflict with some versions of MySQL
         * configured with sql_mode=NO_ZERO_DATE, which can for instance lead to tables not being created.
         *
         * Most other schema updates happen via ActionScheduler_Abstract_Schema::update_table(), however
         * that method relies on dbDelta() and this change is not possible when using that function.
         *
         * @param string $table Name of table being updated.
         * @param string $db_version The existing schema version of the table.
         */
        public function update_schema_5_0($table, $db_version)
        {
        }
    }
    /**
     * CRON expression parser that can determine whether or not a CRON expression is
     * due to run, the next run date and previous run date of a CRON expression.
     * The determinations made by this class are accurate if checked run once per
     * minute (seconds are dropped from date time comparisons).
     *
     * Schedule parts must map to:
     * minute [0-59], hour [0-23], day of month, month [1-12|JAN-DEC], day of week
     * [1-7|MON-SUN], and an optional year.
     *
     * @author Michael Dowling <mtdowling@gmail.com>
     * @link http://en.wikipedia.org/wiki/Cron
     */
    class CronExpression
    {
        const MINUTE = 0;
        const HOUR = 1;
        const DAY = 2;
        const MONTH = 3;
        const WEEKDAY = 4;
        const YEAR = 5;
        /**
         * @var array CRON expression parts
         */
        private $cronParts;
        /**
         * @var CronExpression_FieldFactory CRON field factory
         */
        private $fieldFactory;
        /**
         * @var array Order in which to test of cron parts
         */
        private static $order = array(self::YEAR, self::MONTH, self::DAY, self::WEEKDAY, self::HOUR, self::MINUTE);
        /**
        * Factory method to create a new CronExpression.
        *
        * @param string $expression The CRON expression to create.  There are
        *      several special predefined values which can be used to substitute the
        *      CRON expression:
        *
        *      @yearly, @annually) - Run once a year, midnight, Jan. 1 - 0 0 1 1 *
        *      @monthly - Run once a month, midnight, first of month - 0 0 1 * *
        *      @weekly - Run once a week, midnight on Sun - 0 0 * * 0
        *      @daily - Run once a day, midnight - 0 0 * * *
        *      @hourly - Run once an hour, first minute - 0 * * * *
        *
        *@param CronExpression_FieldFactory $fieldFactory (optional) Field factory to use
        *
        * @return CronExpression
        */
        public static function factory($expression, ?\CronExpression_FieldFactory $fieldFactory = \null)
        {
        }
        /**
         * Parse a CRON expression
         *
         * @param string       $expression   CRON expression (e.g. '8 * * * *')
         * @param CronExpression_FieldFactory $fieldFactory Factory to create cron fields
         */
        public function __construct($expression, \CronExpression_FieldFactory $fieldFactory)
        {
        }
        /**
         * Set or change the CRON expression
         *
         * @param string $value CRON expression (e.g. 8 * * * *)
         *
         * @return CronExpression
         * @throws InvalidArgumentException if not a valid CRON expression
         */
        public function setExpression($value)
        {
        }
        /**
         * Set part of the CRON expression
         *
         * @param int    $position The position of the CRON expression to set
         * @param string $value    The value to set
         *
         * @return CronExpression
         * @throws InvalidArgumentException if the value is not valid for the part
         */
        public function setPart($position, $value)
        {
        }
        /**
         * Get a next run date relative to the current date or a specific date
         *
         * @param string|DateTime $currentTime (optional) Relative calculation date
         * @param int             $nth         (optional) Number of matches to skip before returning a
         *     matching next run date.  0, the default, will return the current
         *     date and time if the next run date falls on the current date and
         *     time.  Setting this value to 1 will skip the first match and go to
         *     the second match.  Setting this value to 2 will skip the first 2
         *     matches and so on.
         * @param bool $allowCurrentDate (optional) Set to TRUE to return the
         *     current date if it matches the cron expression
         *
         * @return DateTime
         * @throws RuntimeException on too many iterations
         */
        public function getNextRunDate($currentTime = 'now', $nth = 0, $allowCurrentDate = \false)
        {
        }
        /**
         * Get a previous run date relative to the current date or a specific date
         *
         * @param string|DateTime $currentTime      (optional) Relative calculation date
         * @param int             $nth              (optional) Number of matches to skip before returning
         * @param bool            $allowCurrentDate (optional) Set to TRUE to return the
         *     current date if it matches the cron expression
         *
         * @return DateTime
         * @throws RuntimeException on too many iterations
         * @see CronExpression::getNextRunDate
         */
        public function getPreviousRunDate($currentTime = 'now', $nth = 0, $allowCurrentDate = \false)
        {
        }
        /**
         * Get multiple run dates starting at the current date or a specific date
         *
         * @param int             $total            Set the total number of dates to calculate
         * @param string|DateTime $currentTime      (optional) Relative calculation date
         * @param bool            $invert           (optional) Set to TRUE to retrieve previous dates
         * @param bool            $allowCurrentDate (optional) Set to TRUE to return the
         *     current date if it matches the cron expression
         *
         * @return array Returns an array of run dates
         */
        public function getMultipleRunDates($total, $currentTime = 'now', $invert = \false, $allowCurrentDate = \false)
        {
        }
        /**
         * Get all or part of the CRON expression
         *
         * @param string $part (optional) Specify the part to retrieve or NULL to
         *      get the full cron schedule string.
         *
         * @return string|null Returns the CRON expression, a part of the
         *      CRON expression, or NULL if the part was specified but not found
         */
        public function getExpression($part = \null)
        {
        }
        /**
         * Helper method to output the full expression.
         *
         * @return string Full CRON expression
         */
        public function __toString()
        {
        }
        /**
         * Determine if the cron is due to run based on the current date or a
         * specific date.  This method assumes that the current number of
         * seconds are irrelevant, and should be called once per minute.
         *
         * @param string|DateTime $currentTime (optional) Relative calculation date
         *
         * @return bool Returns TRUE if the cron is due to run or FALSE if not
         */
        public function isDue($currentTime = 'now')
        {
        }
        /**
         * Get the next or previous run date of the expression relative to a date
         *
         * @param string|DateTime $currentTime      (optional) Relative calculation date
         * @param int             $nth              (optional) Number of matches to skip before returning
         * @param bool            $invert           (optional) Set to TRUE to go backwards in time
         * @param bool            $allowCurrentDate (optional) Set to TRUE to return the
         *     current date if it matches the cron expression
         *
         * @return DateTime
         * @throws RuntimeException on too many iterations
         */
        protected function getRunDate($currentTime = \null, $nth = 0, $invert = \false, $allowCurrentDate = \false)
        {
        }
    }
    /**
     * CRON field interface
     *
     * @author Michael Dowling <mtdowling@gmail.com>
     */
    interface CronExpression_FieldInterface
    {
        /**
         * Check if the respective value of a DateTime field satisfies a CRON exp
         *
         * @param DateTime $date  DateTime object to check
         * @param string   $value CRON expression to test against
         *
         * @return bool Returns TRUE if satisfied, FALSE otherwise
         */
        public function isSatisfiedBy(\DateTime $date, $value);
        /**
         * When a CRON expression is not satisfied, this method is used to increment
         * or decrement a DateTime object by the unit of the cron field
         *
         * @param DateTime $date   DateTime object to change
         * @param bool     $invert (optional) Set to TRUE to decrement
         *
         * @return CronExpression_FieldInterface
         */
        public function increment(\DateTime $date, $invert = \false);
        /**
         * Validates a CRON expression for a given field
         *
         * @param string $value CRON expression value to validate
         *
         * @return bool Returns TRUE if valid, FALSE otherwise
         */
        public function validate($value);
    }
    /**
     * Abstract CRON expression field
     *
     * @author Michael Dowling <mtdowling@gmail.com>
     */
    abstract class CronExpression_AbstractField implements \CronExpression_FieldInterface
    {
        /**
         * Check to see if a field is satisfied by a value
         *
         * @param string $dateValue Date value to check
         * @param string $value     Value to test
         *
         * @return bool
         */
        public function isSatisfied($dateValue, $value)
        {
        }
        /**
         * Check if a value is a range
         *
         * @param string $value Value to test
         *
         * @return bool
         */
        public function isRange($value)
        {
        }
        /**
         * Check if a value is an increments of ranges
         *
         * @param string $value Value to test
         *
         * @return bool
         */
        public function isIncrementsOfRanges($value)
        {
        }
        /**
         * Test if a value is within a range
         *
         * @param string $dateValue Set date value
         * @param string $value     Value to test
         *
         * @return bool
         */
        public function isInRange($dateValue, $value)
        {
        }
        /**
         * Test if a value is within an increments of ranges (offset[-to]/step size)
         *
         * @param string $dateValue Set date value
         * @param string $value     Value to test
         *
         * @return bool
         */
        public function isInIncrementsOfRanges($dateValue, $value)
        {
        }
    }
    /**
     * Day of month field.  Allows: * , / - ? L W
     *
     * 'L' stands for "last" and specifies the last day of the month.
     *
     * The 'W' character is used to specify the weekday (Monday-Friday) nearest the
     * given day. As an example, if you were to specify "15W" as the value for the
     * day-of-month field, the meaning is: "the nearest weekday to the 15th of the
     * month". So if the 15th is a Saturday, the trigger will fire on Friday the
     * 14th. If the 15th is a Sunday, the trigger will fire on Monday the 16th. If
     * the 15th is a Tuesday, then it will fire on Tuesday the 15th. However if you
     * specify "1W" as the value for day-of-month, and the 1st is a Saturday, the
     * trigger will fire on Monday the 3rd, as it will not 'jump' over the boundary
     * of a month's days. The 'W' character can only be specified when the
     * day-of-month is a single day, not a range or list of days.
     *
     * @author Michael Dowling <mtdowling@gmail.com>
     */
    class CronExpression_DayOfMonthField extends \CronExpression_AbstractField
    {
        /**
         * Get the nearest day of the week for a given day in a month
         *
         * @param int $currentYear  Current year
         * @param int $currentMonth Current month
         * @param int $targetDay    Target day of the month
         *
         * @return DateTime Returns the nearest date
         */
        private static function getNearestWeekday($currentYear, $currentMonth, $targetDay)
        {
        }
        /**
         * {@inheritdoc}
         */
        public function isSatisfiedBy(\DateTime $date, $value)
        {
        }
        /**
         * {@inheritdoc}
         */
        public function increment(\DateTime $date, $invert = \false)
        {
        }
        /**
         * {@inheritdoc}
         */
        public function validate($value)
        {
        }
    }
    /**
     * Day of week field.  Allows: * / , - ? L #
     *
     * Days of the week can be represented as a number 0-7 (0|7 = Sunday)
     * or as a three letter string: SUN, MON, TUE, WED, THU, FRI, SAT.
     *
     * 'L' stands for "last". It allows you to specify constructs such as
     * "the last Friday" of a given month.
     *
     * '#' is allowed for the day-of-week field, and must be followed by a
     * number between one and five. It allows you to specify constructs such as
     * "the second Friday" of a given month.
     *
     * @author Michael Dowling <mtdowling@gmail.com>
     */
    class CronExpression_DayOfWeekField extends \CronExpression_AbstractField
    {
        /**
         * {@inheritdoc}
         */
        public function isSatisfiedBy(\DateTime $date, $value)
        {
        }
        /**
         * {@inheritdoc}
         */
        public function increment(\DateTime $date, $invert = \false)
        {
        }
        /**
         * {@inheritdoc}
         */
        public function validate($value)
        {
        }
    }
    /**
     * CRON field factory implementing a flyweight factory
     *
     * @author Michael Dowling <mtdowling@gmail.com>
     * @link http://en.wikipedia.org/wiki/Cron
     */
    class CronExpression_FieldFactory
    {
        /**
         * @var array Cache of instantiated fields
         */
        private $fields = array();
        /**
         * Get an instance of a field object for a cron expression position
         *
         * @param int $position CRON expression position value to retrieve
         *
         * @return CronExpression_FieldInterface
         * @throws InvalidArgumentException if a position is not valid
         */
        public function getField($position)
        {
        }
    }
    /**
     * Hours field.  Allows: * , / -
     *
     * @author Michael Dowling <mtdowling@gmail.com>
     */
    class CronExpression_HoursField extends \CronExpression_AbstractField
    {
        /**
         * {@inheritdoc}
         */
        public function isSatisfiedBy(\DateTime $date, $value)
        {
        }
        /**
         * {@inheritdoc}
         */
        public function increment(\DateTime $date, $invert = \false)
        {
        }
        /**
         * {@inheritdoc}
         */
        public function validate($value)
        {
        }
    }
    /**
     * Minutes field.  Allows: * , / -
     *
     * @author Michael Dowling <mtdowling@gmail.com>
     */
    class CronExpression_MinutesField extends \CronExpression_AbstractField
    {
        /**
         * {@inheritdoc}
         */
        public function isSatisfiedBy(\DateTime $date, $value)
        {
        }
        /**
         * {@inheritdoc}
         */
        public function increment(\DateTime $date, $invert = \false)
        {
        }
        /**
         * {@inheritdoc}
         */
        public function validate($value)
        {
        }
    }
    /**
     * Month field.  Allows: * , / -
     *
     * @author Michael Dowling <mtdowling@gmail.com>
     */
    class CronExpression_MonthField extends \CronExpression_AbstractField
    {
        /**
         * {@inheritdoc}
         */
        public function isSatisfiedBy(\DateTime $date, $value)
        {
        }
        /**
         * {@inheritdoc}
         */
        public function increment(\DateTime $date, $invert = \false)
        {
        }
        /**
         * {@inheritdoc}
         */
        public function validate($value)
        {
        }
    }
    /**
     * Year field.  Allows: * , / -
     *
     * @author Michael Dowling <mtdowling@gmail.com>
     */
    class CronExpression_YearField extends \CronExpression_AbstractField
    {
        /**
         * {@inheritdoc}
         */
        public function isSatisfiedBy(\DateTime $date, $value)
        {
        }
        /**
         * {@inheritdoc}
         */
        public function increment(\DateTime $date, $invert = \false)
        {
        }
        /**
         * {@inheritdoc}
         */
        public function validate($value)
        {
        }
    }
}
namespace MailPoet\EmailEditor {
    class Bootstrap
    {
        /** @var Email_Editor */
        private $emailEditor;
        /** @var CoreEmailEditorIntegration */
        private $coreEmailEditorIntegration;
        public function __construct(\MailPoet\EmailEditor\Engine\Email_Editor $emailEditor, \MailPoet\EmailEditor\Integrations\Core\Initializer $coreEmailEditorIntegration)
        {
        }
        public function init()
        {
        }
        public function initialize()
        {
        }
        public function setupEmailEditorIntegrations()
        {
        }
    }
    /**
     * Main package class.
     */
    class EmailEditorContainer
    {
        /**
         * Init method.
         */
        public static function init()
        {
        }
        /**
         * Loads the DI container for the Email editor.
         *
         * @internal This uses the Blocks DI container. This container will be replaced
         * with a different compatible container.
         *
         * @param boolean $reset Used to reset the container to a fresh instance. Note: this means all dependencies will be reconstructed.
         * @return mixed
         */
        public static function container($reset = false)
        {
        }
    }
}
namespace MailPoet\EmailEditor\Engine\Patterns {
    /**
     * Abstract class for block patterns.
     */
    abstract class Abstract_Pattern
    {
        /**
         * Name of the pattern.
         *
         * @var string $name
         */
        protected $name = '';
        /**
         * Namespace of the pattern.
         *
         * @var string $namespace
         */
        protected $namespace = '';
        /**
         * List of block types.
         *
         * @var array $block_types
         */
        protected $block_types = array();
        /**
         * List of template types.
         *
         * @var string[] $template_types
         */
        protected $template_types = array();
        /**
         * Flag to enable/disable inserter.
         *
         * @var bool $inserter
         */
        protected $inserter = true;
        /**
         * Source of the pattern.
         *
         * @var string $source
         */
        protected $source = 'plugin';
        /**
         * List of categories.
         *
         * @var array $categories
         */
        protected $categories = array();
        /**
         * Viewport width.
         *
         * @var int $viewport_width
         */
        protected $viewport_width = 620;
        /**
         * Get name of the pattern.
         *
         * @return string
         */
        public function get_name(): string
        {
        }
        /**
         * Get namespace of the pattern.
         *
         * @return string
         */
        public function get_namespace(): string
        {
        }
        /**
         * Return properties of the pattern.
         *
         * @return array
         */
        public function get_properties(): array
        {
        }
        /**
         * Get content.
         *
         * @return string
         */
        abstract protected function get_content(): string;
        /**
         * Get title.
         *
         * @return string
         */
        abstract protected function get_title(): string;
        /**
         * Get description.
         *
         * @return string
         */
        protected function get_description(): string
        {
        }
    }
    /**
     * Register block patterns.
     */
    class Patterns
    {
        /**
         * Initialize block patterns.
         *
         * @return void
         */
        public function initialize(): void
        {
        }
        /**
         * Register block pattern category.
         *
         * @return void
         */
        private function register_block_pattern_categories(): void
        {
        }
    }
}
namespace MailPoet\EmailEditor\Engine\PersonalizationTags {
    /**
     * Class based on WP_HTML_Tag_Processor which is extended to replace
     * tokens with their values in the email content.
     *
     * This class was inspired by a concept from the WordPress core,
     * which could help us to avoid refactoring in the future.
     */
    class HTML_Tag_Processor extends \WP_HTML_Tag_Processor
    {
        /**
         * List of deferred updates which will be replaced after calling flush_updates().
         *
         * @var WP_HTML_Text_Replacement[]
         */
        private $deferred_updates = array();
        /**
         * Replaces the token with the new content.
         *
         * @param string $new_content The new content to replace the token.
         */
        public function replace_token(string $new_content): void
        {
        }
        /**
         * Flushes the deferred updates to the lexical updates.
         */
        public function flush_updates(): void
        {
        }
    }
    /**
     * The class represents a personalization tag that contains  all necessary information
     * for replacing the tag with its value and displaying it in the UI.
     */
    class Personalization_Tag
    {
        /**
         * The name of the tag displayed in the UI.
         *
         * @var string
         */
        private string $name;
        /**
         * The token which is used in HTML_Tag_Processor to replace the tag with its value.
         *
         * @var string
         */
        private string $token;
        /**
         * The category of the personalization tag for categorization on the UI.
         *
         * @var string
         */
        private string $category;
        /**
         * The callback function which returns the value of the personalization tag.
         *
         * @var callable
         */
        private $callback;
        /**
         * The attributes which are used in the Personalization Tag UI.
         *
         * @var array
         */
        private array $attributes;
        /**
         * The value that is inserted via the UI. When the value is null the token is generated based on $token attribute and $attributes.
         *
         * @var string
         */
        private string $value_to_insert;
        /**
         * Personalization_Tag constructor.
         *
         * Example usage:
         *   $tag = new Personalization_Tag(
         *     'First Name',
         *     'user:first_name',
         *     'User',
         *      function( $context, $args ) {
         *        return $context['user_firstname'] ?? 'user';
         *      },
         *      array( default => 'user' ),
         *      'user:first default="user"'
         *   );
         *
         * @param string      $name The name of the tag displayed in the UI.
         * @param string      $token The token used in HTML_Tag_Processor to replace the tag with its value.
         * @param string      $category The category of the personalization tag for categorization on the UI.
         * @param callable    $callback The callback function which returns the value of the personalization tag.
         * @param array       $attributes The attributes which are used in the Personalization Tag UI.
         * @param string|null $value_to_insert The value that is inserted via the UI. When the value is null the token is generated based on $token attribute and $attributes.
         */
        public function __construct(string $name, string $token, string $category, callable $callback, array $attributes = array(), ?string $value_to_insert = null)
        {
        }
        /**
         * Returns the name of the personalization tag.
         *
         * @return string
         */
        public function get_name(): string
        {
        }
        /**
         * Returns the token of the personalization tag.
         *
         * @return string
         */
        public function get_token(): string
        {
        }
        /**
         * Returns the category of the personalization tag.
         *
         * @return string
         */
        public function get_category(): string
        {
        }
        /**
         * Returns the attributes of the personalization tag.
         *
         * @return array
         */
        public function get_attributes(): array
        {
        }
        /**
         * Returns the token to insert via UI in the editor.
         *
         * @return string
         */
        public function get_value_to_insert(): string
        {
        }
        /**
         * Executes the callback function for the personalization tag.
         *
         * @param mixed $context The context for the personalization tag.
         * @param array $args The additional arguments for the callback.
         * @return string The value of the personalization tag.
         */
        public function execute_callback($context, $args = array()): string
        {
        }
    }
    /**
     * Registry for personalization tags.
     */
    class Personalization_Tags_Registry
    {
        /**
         * List of registered personalization tags.
         *
         * @var Personalization_Tag[]
         */
        private $tags = array();
        /**
         * Initialize the personalization tags registry.
         * This method should be called only once.
         *
         * @return void
         */
        public function initialize(): void
        {
        }
        /**
         * Register a new personalization instance in the registry.
         *
         * @param Personalization_Tag $tag The personalization tag to register.
         * @return void
         */
        public function register(\MailPoet\EmailEditor\Engine\PersonalizationTags\Personalization_Tag $tag): void
        {
        }
        /**
         * Retrieve a personalization tag by its token.
         * Example: get_by_token( 'user:first_name' ) will return the instance of Personalization_Tag with identical token.
         *
         * @param string $token The token of the personalization tag.
         * @return Personalization_Tag|null The array data or null if not found.
         */
        public function get_by_token(string $token): ?\MailPoet\EmailEditor\Engine\PersonalizationTags\Personalization_Tag
        {
        }
        /**
         * Retrieve all registered personalization tags.
         *
         * @return array List of all registered personalization tags.
         */
        public function get_all()
        {
        }
    }
}
namespace MailPoet\EmailEditor\Engine\Renderer\ContentRenderer\Layout {
    /**
     * This class provides functionality to render inner blocks of a block that supports reduced flex layout.
     */
    class Flex_Layout_Renderer
    {
        /**
         * Render inner blocks in flex layout.
         *
         * @param array               $parsed_block Parsed block.
         * @param Settings_Controller $settings_controller Settings controller.
         * @return string
         */
        public function render_inner_blocks_in_layout(array $parsed_block, \MailPoet\EmailEditor\Engine\Settings_Controller $settings_controller): string
        {
        }
        /**
         * Compute widths for blocks in flex layout.
         *
         * @param array               $parsed_block Parsed block.
         * @param Settings_Controller $settings_controller Settings controller.
         * @param float               $flex_gap Flex gap.
         * @return array
         */
        private function compute_widths_for_flex_layout(array $parsed_block, \MailPoet\EmailEditor\Engine\Settings_Controller $settings_controller, float $flex_gap): array
        {
        }
        /**
         * How much of width we will strip to keep some space for the gap
         * This is computed based on CSS rule used in the editor:
         * For block with width set to X percent
         * width: calc(X% - (var(--wp--style--block-gap) * (100 - X)/100)));
         *
         * @param float $block_width Block width in pixels.
         * @param float $flex_gap Flex gap in pixels.
         * @param float $block_width_percent Block width in percent.
         * @return int
         */
        private function get_width_without_gap(float $block_width, float $flex_gap, float $block_width_percent): int
        {
        }
    }
}
namespace MailPoet\EmailEditor\Engine\Renderer\ContentRenderer\Postprocessors {
    /**
     * Interface for postprocessors.
     */
    interface Postprocessor
    {
        /**
         * Postprocess the HTML.
         *
         * @param string $html HTML to postprocess.
         * @return string
         */
        public function postprocess(string $html): string;
    }
    /**
     * This postprocessor replaces <mark> tags with <span> tags because mark tags are not supported across all email clients
     */
    class Highlighting_Postprocessor implements \MailPoet\EmailEditor\Engine\Renderer\ContentRenderer\Postprocessors\Postprocessor
    {
        /**
         * Postprocess the HTML.
         *
         * @param string $html HTML to postprocess.
         * @return string
         */
        public function postprocess(string $html): string
        {
        }
    }
    /**
     * In some case the blocks HTML contains CSS variables.
     * For example when spacing is set from a preset the inline styles contain var(--wp--preset--spacing--10), var(--wp--preset--spacing--20) etc.
     * This postprocessor uses variables from theme.json and replaces the CSS variables with their values in final email HTML.
     */
    class Variables_Postprocessor implements \MailPoet\EmailEditor\Engine\Renderer\ContentRenderer\Postprocessors\Postprocessor
    {
        /**
         * Instance of Theme_Controller.
         *
         * @var Theme_Controller Theme controller.
         */
        private \MailPoet\EmailEditor\Engine\Theme_Controller $theme_controller;
        /**
         * Constructor.
         *
         * @param Theme_Controller $theme_controller Theme controller.
         */
        public function __construct(\MailPoet\EmailEditor\Engine\Theme_Controller $theme_controller)
        {
        }
        /**
         * Postprocess the HTML.
         *
         * @param string $html HTML to postprocess.
         * @return string
         */
        public function postprocess(string $html): string
        {
        }
    }
}
namespace MailPoet\EmailEditor\Engine\Renderer\ContentRenderer\Preprocessors {
    /**
     * Interface Preprocessor
     */
    interface Preprocessor
    {
        /**
         * Method to preprocess the content before rendering
         *
         * @param array                                                                                                             $parsed_blocks Parsed blocks of the email.
         * @param array{contentSize: string, wideSize?: string, allowEditing?: bool, allowCustomContentAndWideSize?: bool}          $layout Layout of the email.
         * @param array{spacing: array{padding: array{bottom: string, left: string, right: string, top: string}, blockGap: string}} $styles Styles of the email.
         * @return array
         */
        public function preprocess(array $parsed_blocks, array $layout, array $styles): array;
    }
    /**
     * This class sets the width of the blocks based on the layout width or column count.
     * The final width in pixels is stored in the email_attrs array because we would like to avoid changing the original attributes.
     */
    class Blocks_Width_Preprocessor implements \MailPoet\EmailEditor\Engine\Renderer\ContentRenderer\Preprocessors\Preprocessor
    {
        /**
         * Method to preprocess the content before rendering
         *
         * @param array                                                                                                             $parsed_blocks Parsed blocks of the email.
         * @param array{contentSize: string}                                                                                        $layout Layout of the email.
         * @param array{spacing: array{padding: array{bottom: string, left: string, right: string, top: string}, blockGap: string}} $styles Styles of the email.
         * @return array
         */
        public function preprocess(array $parsed_blocks, array $layout, array $styles): array
        {
        }
        // TODO: We could add support for other units like em, rem, etc.
        /**
         * Convert width to pixels
         *
         * @param string $current_width Current width.
         * @param float  $layout_width Layout width.
         * @return float
         */
        private function convert_width_to_pixels(string $current_width, float $layout_width): float
        {
        }
        /**
         * Parse number from string with pixels
         *
         * @param string $value Value with pixels.
         * @return float
         */
        private function parse_number_from_string_with_pixels(string $value): float
        {
        }
        /**
         * Add missing column widths
         *
         * @param array $columns Columns.
         * @param float $columns_width Columns width.
         * @return array
         */
        private function add_missing_column_widths(array $columns, float $columns_width): array
        {
        }
    }
    /**
     * Class Cleanup_Preprocessor
     */
    class Cleanup_Preprocessor implements \MailPoet\EmailEditor\Engine\Renderer\ContentRenderer\Preprocessors\Preprocessor
    {
        /**
         * Method to preprocess the content before rendering
         *
         * @param array                                                                                                             $parsed_blocks Parsed blocks of the email.
         * @param array{contentSize: string}                                                                                        $layout Layout of the email.
         * @param array{spacing: array{padding: array{bottom: string, left: string, right: string, top: string}, blockGap: string}} $styles Styles of the email.
         * @return array
         */
        public function preprocess(array $parsed_blocks, array $layout, array $styles): array
        {
        }
    }
    /**
     * This preprocessor is responsible for setting default spacing values for blocks.
     * In the early development phase, we are setting only margin-top for blocks that are not first or last in the columns block.
     */
    class Spacing_Preprocessor implements \MailPoet\EmailEditor\Engine\Renderer\ContentRenderer\Preprocessors\Preprocessor
    {
        /**
         * Preprocesses the parsed blocks.
         *
         * @param array $parsed_blocks Parsed blocks.
         * @param array $layout Layout.
         * @param array $styles Styles.
         * @return array
         */
        public function preprocess(array $parsed_blocks, array $layout, array $styles): array
        {
        }
        /**
         * Adds margin-top to blocks that are not first or last in the columns block.
         *
         * @param array      $parsed_blocks Parsed blocks.
         * @param string     $gap Gap.
         * @param array|null $parent_block Parent block.
         * @return array
         */
        private function add_block_gaps(array $parsed_blocks, string $gap = '', $parent_block = null): array
        {
        }
    }
    /**
     * This preprocessor is responsible for setting default typography values for blocks.
     */
    class Typography_Preprocessor implements \MailPoet\EmailEditor\Engine\Renderer\ContentRenderer\Preprocessors\Preprocessor
    {
        /**
         * List of styles that should be copied from parent to children.
         *
         * @var string[]
         */
        private const TYPOGRAPHY_STYLES = array('color', 'font-size', 'text-decoration');
        /**
         * Injected settings controller
         *
         * @var Settings_Controller
         */
        private $settings_controller;
        /**
         * Typography_Preprocessor constructor.
         *
         * @param Settings_Controller $settings_controller Settings controller.
         */
        public function __construct(\MailPoet\EmailEditor\Engine\Settings_Controller $settings_controller)
        {
        }
        /**
         * Method to preprocess the content before rendering
         *
         * @param array                                                                                                             $parsed_blocks Parsed blocks of the email.
         * @param array{contentSize: string}                                                                                        $layout Layout of the email.
         * @param array{spacing: array{padding: array{bottom: string, left: string, right: string, top: string}, blockGap: string}} $styles Styles of the email.
         * @return array
         */
        public function preprocess(array $parsed_blocks, array $layout, array $styles): array
        {
        }
        /**
         * Copy typography styles from parent to children
         *
         * @param array $children List of children blocks.
         * @param array $parent_block  Parent block.
         * @return array
         */
        private function copy_typography_from_parent(array $children, array $parent_block): array
        {
        }
        /**
         * Preprocess parent block
         *
         * @param array $block Block to preprocess.
         * @return array
         */
        private function preprocess_parent(array $block): array
        {
        }
        /**
         * Filter styles to only include typography styles
         *
         * @param array $styles List of styles.
         * @return array
         */
        private function filterStyles(array $styles): array
        {
        }
        /**
         * Set default values from theme
         *
         * @param array $block Block to set defaults for.
         * @return array
         */
        private function set_defaults_from_theme(array $block): array
        {
        }
    }
}
namespace MailPoet\EmailEditor\Engine\Renderer\ContentRenderer {
    /**
     * Interface Block_Renderer
     */
    interface Block_Renderer
    {
        /**
         * Renders the block content
         *
         * @param string              $block_content Block content.
         * @param array               $parsed_block Parsed block.
         * @param Settings_Controller $settings_controller Settings controller.
         * @return string
         */
        public function render(string $block_content, array $parsed_block, \MailPoet\EmailEditor\Engine\Settings_Controller $settings_controller): string;
    }
    /**
     * Class Blocks_Parser
     */
    class Blocks_Parser extends \WP_Block_Parser
    {
        /**
         * List of parsed blocks
         *
         * @var \WP_Block_Parser_Block[]
         */
        public $output;
        /**
         * Parse the blocks from the document
         *
         * @param string $document Document to parse.
         * @return array[]
         */
        public function parse($document)
        {
        }
    }
    /**
     * Class Blocks_Registry
     */
    class Blocks_Registry
    {
        /**
         * Fallback renderer.
         *
         * @var ?Block_Renderer $fallback_renderer
         */
        private $fallback_renderer = null;
        /**
         * Array of block renderers.
         *
         * @var Block_Renderer[] $block_renderers_map
         */
        private array $block_renderers_map = array();
        /**
         * Adds block renderer to the registry.
         *
         * @param string         $block_name Block name.
         * @param Block_Renderer $renderer Block renderer.
         */
        public function add_block_renderer(string $block_name, \MailPoet\EmailEditor\Engine\Renderer\ContentRenderer\Block_Renderer $renderer): void
        {
        }
        /**
         * Adds fallback renderer to the registry.
         *
         * @param Block_Renderer $renderer Fallback renderer.
         */
        public function add_fallback_renderer(\MailPoet\EmailEditor\Engine\Renderer\ContentRenderer\Block_Renderer $renderer): void
        {
        }
        /**
         * Checks if block renderer is registered.
         *
         * @param string $block_name Block name.
         * @return bool
         */
        public function has_block_renderer(string $block_name): bool
        {
        }
        /**
         * Returns block renderer by block name.
         *
         * @param string $block_name Block name.
         * @return Block_Renderer|null
         */
        public function get_block_renderer(string $block_name): ?\MailPoet\EmailEditor\Engine\Renderer\ContentRenderer\Block_Renderer
        {
        }
        /**
         * Returns fallback renderer.
         *
         * @return Block_Renderer|null
         */
        public function get_fallback_renderer(): ?\MailPoet\EmailEditor\Engine\Renderer\ContentRenderer\Block_Renderer
        {
        }
        /**
         * Removes all block renderers from the registry.
         */
        public function remove_all_block_renderers(): void
        {
        }
        /**
         * Removes block renderer from the registry.
         *
         * @param string $block_name Block name.
         */
        private function remove_block_renderer(string $block_name): void
        {
        }
    }
    /**
     * Class Content_Renderer
     */
    class Content_Renderer
    {
        /**
         * Blocks registry
         *
         * @var Blocks_Registry
         */
        private \MailPoet\EmailEditor\Engine\Renderer\ContentRenderer\Blocks_Registry $blocks_registry;
        /**
         * Process manager
         *
         * @var Process_Manager
         */
        private \MailPoet\EmailEditor\Engine\Renderer\ContentRenderer\Process_Manager $process_manager;
        /**
         * Settings controller
         *
         * @var Settings_Controller
         */
        private \MailPoet\EmailEditor\Engine\Settings_Controller $settings_controller;
        /**
         * Theme controller
         *
         * @var Theme_Controller
         */
        private \MailPoet\EmailEditor\Engine\Theme_Controller $theme_controller;
        const CONTENT_STYLES_FILE = 'content.css';
        /**
         * CSS inliner
         *
         * @var Css_Inliner
         */
        private \MailPoet\EmailEditor\Engine\Renderer\Css_Inliner $css_inliner;
        /**
         * Content_Renderer constructor.
         *
         * @param Process_Manager     $preprocess_manager Preprocess manager.
         * @param Blocks_Registry     $blocks_registry Blocks registry.
         * @param Settings_Controller $settings_controller Settings controller.
         * @param Css_Inliner         $css_inliner Css inliner.
         * @param Theme_Controller    $theme_controller Theme controller.
         */
        public function __construct(\MailPoet\EmailEditor\Engine\Renderer\ContentRenderer\Process_Manager $preprocess_manager, \MailPoet\EmailEditor\Engine\Renderer\ContentRenderer\Blocks_Registry $blocks_registry, \MailPoet\EmailEditor\Engine\Settings_Controller $settings_controller, \MailPoet\EmailEditor\Engine\Renderer\Css_Inliner $css_inliner, \MailPoet\EmailEditor\Engine\Theme_Controller $theme_controller)
        {
        }
        /**
         * Initialize the content renderer
         *
         * @return void
         */
        private function initialize()
        {
        }
        /**
         * Render the content
         *
         * @param WP_Post           $post Post object.
         * @param WP_Block_Template $template Block template.
         * @return string
         */
        public function render(\WP_Post $post, \WP_Block_Template $template): string
        {
        }
        /**
         * Get block parser class
         *
         * @return string
         */
        public function block_parser()
        {
        }
        /**
         * Preprocess parsed blocks
         *
         * @param array $parsed_blocks Parsed blocks.
         * @return array
         */
        public function preprocess_parsed_blocks(array $parsed_blocks): array
        {
        }
        /**
         * Renders block
         * Translates block's HTML to HTML suitable for email clients. The method is intended as a callback for 'render_block' filter.
         *
         * @param string $block_content Block content.
         * @param array  $parsed_block Parsed block.
         * @return string
         */
        public function render_block(string $block_content, array $parsed_block): string
        {
        }
        /**
         * Set template globals
         *
         * @param WP_Post           $post Post object.
         * @param WP_Block_Template $template Block template.
         * @return void
         */
        private function set_template_globals(\WP_Post $post, \WP_Block_Template $template)
        {
        }
        /**
         * As we use default WordPress filters, we need to remove them after email rendering
         * so that we don't interfere with possible post rendering that might happen later.
         */
        private function reset(): void
        {
        }
        /**
         * Method to inline styles into the HTML
         *
         * @param string                 $html HTML content.
         * @param WP_Post                $post Post object.
         * @param WP_Block_Template|null $template Block template.
         * @return string
         */
        private function inline_styles($html, \WP_Post $post, $template = null)
        {
        }
    }
    /**
     * Class Process_Manager
     */
    class Process_Manager
    {
        /**
         * List of preprocessors
         *
         * @var Preprocessor[]
         */
        private $preprocessors = array();
        /**
         * List of postprocessors
         *
         * @var Postprocessor[]
         */
        private $postprocessors = array();
        /**
         * Process_Manager constructor.
         *
         * @param Cleanup_Preprocessor       $cleanup_preprocessor Cleanup preprocessor.
         * @param Blocks_Width_Preprocessor  $blocks_width_preprocessor Blocks width preprocessor.
         * @param Typography_Preprocessor    $typography_preprocessor Typography preprocessor.
         * @param Spacing_Preprocessor       $spacing_preprocessor Spacing preprocessor.
         * @param Highlighting_Postprocessor $highlighting_postprocessor Highlighting postprocessor.
         * @param Variables_Postprocessor    $variables_postprocessor Variables postprocessor.
         */
        public function __construct(\MailPoet\EmailEditor\Engine\Renderer\ContentRenderer\Preprocessors\Cleanup_Preprocessor $cleanup_preprocessor, \MailPoet\EmailEditor\Engine\Renderer\ContentRenderer\Preprocessors\Blocks_Width_Preprocessor $blocks_width_preprocessor, \MailPoet\EmailEditor\Engine\Renderer\ContentRenderer\Preprocessors\Typography_Preprocessor $typography_preprocessor, \MailPoet\EmailEditor\Engine\Renderer\ContentRenderer\Preprocessors\Spacing_Preprocessor $spacing_preprocessor, \MailPoet\EmailEditor\Engine\Renderer\ContentRenderer\Postprocessors\Highlighting_Postprocessor $highlighting_postprocessor, \MailPoet\EmailEditor\Engine\Renderer\ContentRenderer\Postprocessors\Variables_Postprocessor $variables_postprocessor)
        {
        }
        /**
         * Method to preprocess blocks
         *
         * @param array                                                                                                             $parsed_blocks Parsed blocks.
         * @param array{contentSize: string, wideSize?: string, allowEditing?: bool, allowCustomContentAndWideSize?: bool}          $layout Layout.
         * @param array{spacing: array{padding: array{bottom: string, left: string, right: string, top: string}, blockGap: string}} $styles Styles.
         * @return array
         */
        public function preprocess(array $parsed_blocks, array $layout, array $styles): array
        {
        }
        /**
         * Method to postprocess the content
         *
         * @param string $html HTML content.
         * @return string
         */
        public function postprocess(string $html): string
        {
        }
        /**
         * Register preprocessor
         *
         * @param Preprocessor $preprocessor Preprocessor.
         */
        public function register_preprocessor(\MailPoet\EmailEditor\Engine\Renderer\ContentRenderer\Preprocessors\Preprocessor $preprocessor): void
        {
        }
        /**
         * Register postprocessor
         *
         * @param Postprocessor $postprocessor Postprocessor.
         */
        public function register_postprocessor(\MailPoet\EmailEditor\Engine\Renderer\ContentRenderer\Postprocessors\Postprocessor $postprocessor): void
        {
        }
    }
}
namespace MailPoet\EmailEditor\Engine\Renderer {
    /**
     * Class Renderer
     */
    class Renderer
    {
        /**
         * Theme controller
         *
         * @var Theme_Controller
         */
        private \MailPoet\EmailEditor\Engine\Theme_Controller $theme_controller;
        /**
         * Content renderer
         *
         * @var Content_Renderer
         */
        private \MailPoet\EmailEditor\Engine\Renderer\ContentRenderer\Content_Renderer $content_renderer;
        /**
         * Templates
         *
         * @var Templates
         */
        private \MailPoet\EmailEditor\Engine\Templates\Templates $templates;
        /**
         * Css inliner
         *
         * @var Css_Inliner
         */
        private \MailPoet\EmailEditor\Engine\Renderer\Css_Inliner $css_inliner;
        const TEMPLATE_FILE = 'template-canvas.php';
        const TEMPLATE_STYLES_FILE = 'template-canvas.css';
        /**
         * Renderer constructor.
         *
         * @param Content_Renderer $content_renderer Content renderer.
         * @param Templates        $templates Templates.
         * @param Css_Inliner      $css_inliner CSS Inliner.
         * @param Theme_Controller $theme_controller Theme controller.
         */
        public function __construct(\MailPoet\EmailEditor\Engine\Renderer\ContentRenderer\Content_Renderer $content_renderer, \MailPoet\EmailEditor\Engine\Templates\Templates $templates, \MailPoet\EmailEditor\Engine\Renderer\Css_Inliner $css_inliner, \MailPoet\EmailEditor\Engine\Theme_Controller $theme_controller)
        {
        }
        /**
         * Renders the email template
         *
         * @param \WP_Post $post Post object.
         * @param string   $subject Email subject.
         * @param string   $pre_header Email preheader.
         * @param string   $language Email language.
         * @param string   $meta_robots Email meta robots.
         * @return array
         */
        public function render(\WP_Post $post, string $subject, string $pre_header, string $language, $meta_robots = ''): array
        {
        }
        /**
         * Inlines CSS styles into the HTML
         *
         * @param string $template HTML template.
         * @return string
         */
        private function inline_css_styles($template)
        {
        }
        /**
         * Renders the text version of the email template
         *
         * @param string $template HTML template.
         * @return string
         */
        private function render_text_version($template)
        {
        }
    }
    interface Css_Inliner
    {
        /**
         * Builds a new instance from the given HTML.
         *
         * @param string $unprocessed_html raw HTML, must be UTF-encoded, must not be empty.
         *
         * @return static
         */
        public function from_html(string $unprocessed_html): self;
        /**
         * Inlines the given CSS into the existing HTML.
         *
         * @param string $css the CSS to inline, must be UTF-8-encoded.
         *
         * @return $this
         */
        public function inline_css(string $css = ''): self;
        /**
         * Renders the normalized and processed HTML.
         *
         * @return string
         */
        public function render(): string;
    }
}
namespace MailPoet\EmailEditor\Engine\Templates {
    /**
     * The class represents a template
     */
    class Template
    {
        /**
         * Plugin uri used in the template name.
         *
         * @var string $plugin_uri
         */
        private string $plugin_uri;
        /**
         * The template slug used in the template name.
         *
         * @var string $slug
         */
        private string $slug;
        /**
         * The template name used for block template registration.
         *
         * @var string $name
         */
        private string $name;
        /**
         * The template title.
         *
         * @var string $title
         */
        private string $title;
        /**
         * The template description.
         *
         * @var string $description
         */
        private string $description;
        /**
         * The template content.
         *
         * @var string $content
         */
        private string $content;
        /**
         * The list of supoorted post types.
         *
         * @var string[]
         */
        private array $post_types;
        /**
         * Constructor of the class.
         *
         * @param string   $plugin_uri The plugin uri.
         * @param string   $slug The template slug.
         * @param string   $title The template title.
         * @param string   $description The template description.
         * @param string   $content The template content.
         * @param string[] $post_types The list of post types supported by the template.
         */
        public function __construct(string $plugin_uri, string $slug, string $title, string $description, string $content, array $post_types = array())
        {
        }
        /**
         * Get the plugin uri.
         *
         * @return string
         */
        public function get_pluginuri(): string
        {
        }
        /**
         * Get the template slug.
         *
         * @return string
         */
        public function get_slug(): string
        {
        }
        /**
         * Get the template name composed from the plugin_uri and the slug.
         *
         * @return string
         */
        public function get_name(): string
        {
        }
        /**
         * Get the template title.
         *
         * @return string
         */
        public function get_title(): string
        {
        }
        /**
         * Get the template description.
         *
         * @return string
         */
        public function get_description(): string
        {
        }
        /**
         * Get the template content.
         *
         * @return string
         */
        public function get_content(): string
        {
        }
        /**
         * Get the list of supported post types.
         *
         * @return string[]
         */
        public function get_post_types(): array
        {
        }
    }
    /**
     * Registry for email templates.
     */
    class Templates_Registry
    {
        /**
         * List of registered templates.
         *
         * @var Template[]
         */
        private $templates = array();
        /**
         * Initialize the template registry.
         * This method should be called only once.
         *
         * @return void
         */
        public function initialize(): void
        {
        }
        /**
         * Register a template instance in the registry.
         *
         * @param Template $template The template to register.
         * @return void
         */
        public function register(\MailPoet\EmailEditor\Engine\Templates\Template $template): void
        {
        }
        /**
         * Retrieve a template by its name.
         * Example: get_by_name( 'mailpoet//email-general' ) will return the instance of Template with identical name.
         *
         * @param string $name The name of the template.
         * @return Template|null The template object or null if not found.
         */
        public function get_by_name(string $name): ?\MailPoet\EmailEditor\Engine\Templates\Template
        {
        }
        /**
         * Retrieve a template by its slug.
         * Example: get_by_slug( 'email-general' ) will return the instance of Template with identical slug.
         *
         * @param string $slug The slug of the template.
         * @return Template|null The template object or null if not found.
         */
        public function get_by_slug(string $slug): ?\MailPoet\EmailEditor\Engine\Templates\Template
        {
        }
        /**
         * Retrieve all registered templates.
         *
         * @return array List of all registered templates.
         */
        public function get_all()
        {
        }
    }
    /**
     * Templates class.
     */
    class Templates
    {
        /**
         * The plugin slug.
         *
         * @var string $plugin_slug
         */
        private string $template_prefix = 'mailpoet';
        /**
         * The post type.
         *
         * @var string[] $post_type
         */
        private array $post_types = array();
        /**
         * The template directory.
         *
         * @var string $template_directory
         */
        private string $template_directory = __DIR__ . DIRECTORY_SEPARATOR;
        /**
         * The templates registry.
         *
         * @var Templates_Registry $templates_registry
         */
        private \MailPoet\EmailEditor\Engine\Templates\Templates_Registry $templates_registry;
        /**
         * Constructor of the class.
         *
         * @param Templates_Registry $templates_registry The templates registry.
         */
        public function __construct(\MailPoet\EmailEditor\Engine\Templates\Templates_Registry $templates_registry)
        {
        }
        /**
         * Initializes the class.
         *
         * @param string[] $post_types The list of post types registered for usage with email editor.
         */
        public function initialize(array $post_types): void
        {
        }
        /**
         * Get a block template by ID.
         *
         * @param string $template_slug The template slug.
         * @return WP_Block_Template|null
         */
        public function get_block_template($template_slug)
        {
        }
        /**
         * Register the templates via register_block_template
         *
         * @param Templates_Registry $templates_registry The templates registry.
         */
        public function register_templates(\MailPoet\EmailEditor\Engine\Templates\Templates_Registry $templates_registry): \MailPoet\EmailEditor\Engine\Templates\Templates_Registry
        {
        }
        /**
         * Register post_types property to the templates rest api response.
         *
         * There is a PR that adds the property into the core https://github.com/WordPress/wordpress-develop/pull/7530
         * Until it is merged, we need to add it manually.
         */
        public function register_post_types_to_api(): void
        {
        }
        /**
         * This is a callback function for adding post_types property to templates rest api response.
         *
         * @param array $response_object The rest API response object.
         * @return array
         */
        public function get_post_types($response_object): array
        {
        }
        /**
         * This is need to enable saving post – template association.
         * When a theme doesn't support block_templates feature the association is not saved, because templates registered via register_block_template are not added to the list of available templates.
         * https://github.com/WordPress/wordpress-develop/blob/cdc2f255acce57372b849d6278c4156e1056c749/src/wp-includes/class-wp-theme.php#L1355
         *
         * This function ensures that the email templates are in the list which is used for checking if the template can be saved in the association.
         * See https://github.com/WordPress/wordpress-develop/blob/cdc2f255acce57372b849d6278c4156e1056c749/src/wp-includes/rest-api/endpoints/class-wp-rest-posts-controller.php#L1595-L1599
         *
         * @param array    $templates The templates.
         * @param string   $theme The theme.
         * @param \WP_Post $post The post.
         * @param string   $post_type The post type.
         * @return array
         */
        public function add_theme_templates($templates, $theme, $post, $post_type)
        {
        }
    }
}
namespace MailPoet\EmailEditor\Engine {
    /**
     * This class is responsible checking the dependencies of the email editor.
     */
    class Dependency_Check
    {
        /**
         * Minimum WordPress version required for the email editor.
         */
        public const MIN_WP_VERSION = '6.7';
        /**
         * Checks if all dependencies are met.
         */
        public function are_dependencies_met(): bool
        {
        }
        /**
         * Checks if the WordPress version is supported.
         */
        private function is_wp_version_compatible(): bool
        {
        }
    }
    /**
     * Class for email API controller.
     */
    class Email_Api_Controller
    {
        /**
         * Personalization tags registry to get all personalization tags.
         *
         * @var Personalization_Tags_Registry
         */
        private \MailPoet\EmailEditor\Engine\PersonalizationTags\Personalization_Tags_Registry $personalization_tags_registry;
        /**
         * Email_Api_Controller constructor with all dependencies.
         *
         * @param Personalization_Tags_Registry $personalization_tags_registry Personalization tags registry.
         */
        public function __construct(\MailPoet\EmailEditor\Engine\PersonalizationTags\Personalization_Tags_Registry $personalization_tags_registry)
        {
        }
        /**
         * Returns email specific data.
         *
         * @return array - Email specific data such styles.
         */
        public function get_email_data(): array
        {
        }
        /**
         * Update Email specific data we store.
         *
         * @param array   $data - Email specific data.
         * @param WP_Post $email_post - Email post object.
         */
        public function save_email_data(array $data, \WP_Post $email_post): void
        {
        }
        /**
         * Sends preview email
         *
         * @param WP_REST_Request $request route request.
         * @return WP_REST_Response
         */
        public function send_preview_email_data(\WP_REST_Request $request): \WP_REST_Response
        {
        }
        /**
         * Returns all registered personalization tags.
         *
         * @return WP_REST_Response
         */
        public function get_personalization_tags(): \WP_REST_Response
        {
        }
        /**
         * Returns the schema for email data.
         *
         * @return array
         */
        public function get_email_data_schema(): array
        {
        }
    }
    /**
     * Email editor class.
     *
     * @phpstan-type EmailPostType array{name: string, args: array, meta: array{key: string, args: array}[]}
     * See register_post_type for details about EmailPostType args.
     */
    class Email_Editor
    {
        public const MAILPOET_EMAIL_META_THEME_TYPE = 'mailpoet_email_theme';
        /**
         * Property for the email API controller.
         *
         * @var Email_Api_Controller Email API controller.
         */
        private \MailPoet\EmailEditor\Engine\Email_Api_Controller $email_api_controller;
        /**
         * Property for the templates.
         *
         * @var Templates Templates.
         */
        private \MailPoet\EmailEditor\Engine\Templates\Templates $templates;
        /**
         * Property for the patterns.
         *
         * @var Patterns Patterns.
         */
        private \MailPoet\EmailEditor\Engine\Patterns\Patterns $patterns;
        /**
         * Property for the send preview email controller.
         *
         * @var Send_Preview_Email Send Preview controller.
         */
        private \MailPoet\EmailEditor\Engine\Send_Preview_Email $send_preview_email;
        /**
         * Property for Personalization_Tags_Controller that allows initializing personalization tags.
         *
         * @var Personalization_Tags_Registry Personalization tags registry.
         */
        private \MailPoet\EmailEditor\Engine\PersonalizationTags\Personalization_Tags_Registry $personalization_tags_registry;
        /**
         * Constructor.
         *
         * @param Email_Api_Controller          $email_api_controller Email API controller.
         * @param Templates                     $templates Templates.
         * @param Patterns                      $patterns Patterns.
         * @param Send_Preview_Email            $send_preview_email Preview email controller.
         * @param Personalization_Tags_Registry $personalization_tags_controller Personalization tags registry that allows initializing personalization tags.
         */
        public function __construct(\MailPoet\EmailEditor\Engine\Email_Api_Controller $email_api_controller, \MailPoet\EmailEditor\Engine\Templates\Templates $templates, \MailPoet\EmailEditor\Engine\Patterns\Patterns $patterns, \MailPoet\EmailEditor\Engine\Send_Preview_Email $send_preview_email, \MailPoet\EmailEditor\Engine\PersonalizationTags\Personalization_Tags_Registry $personalization_tags_controller)
        {
        }
        /**
         * Initialize the email editor.
         *
         * @return void
         */
        public function initialize(): void
        {
        }
        /**
         * Register block templates.
         *
         * @return void
         */
        private function register_block_templates(): void
        {
        }
        /**
         * Register block patterns.
         *
         * @return void
         */
        private function register_block_patterns(): void
        {
        }
        /**
         * Register all custom post types that should be edited via the email editor
         * The post types are added via mailpoet_email_editor_post_types filter.
         *
         * @return void
         */
        private function register_email_post_types(): void
        {
        }
        /**
         * Register all personalization tags registered via
         * the mailpoet_email_editor_register_personalization_tags filter.
         *
         * @return void
         */
        private function register_personalization_tags(): void
        {
        }
        /**
         * Returns the email post types.
         *
         * @return array
         * @phpstan-return EmailPostType[]
         */
        private function get_post_types(): array
        {
        }
        /**
         * Returns the default arguments for email post types.
         *
         * @return array
         */
        private function get_default_email_post_args(): array
        {
        }
        /**
         * Register the 'sent' post status for emails.
         *
         * @return void
         */
        private function register_email_post_sent_status(): void
        {
        }
        /**
         * Extends the email post types with email specific data.
         *
         * @return void
         */
        public function extend_email_post_api()
        {
        }
        /**
         * Registers the API route endpoint for the email editor
         *
         * @return void
         */
        public function register_email_editor_api_routes()
        {
        }
        /**
         * Extends the email theme styles with the email specific styles.
         *
         * @param WP_Theme_JSON $theme Email theme styles.
         * @param WP_Post       $post Email post object.
         * @return WP_Theme_JSON
         */
        public function extend_email_theme_styles(\WP_Theme_JSON $theme, \WP_Post $post): \WP_Theme_JSON
        {
        }
        /**
         * Get the current post object
         *
         * @return array|mixed|WP_Post|null
         */
        public function get_current_post()
        {
        }
        /**
         * Use a custom page template for the email editor frontend rendering.
         *
         * @param string $template post template.
         * @return string
         */
        public function load_email_preview_template($template)
        {
        }
    }
    /**
     * Class for email styles schema.
     */
    class Email_Styles_Schema
    {
        /**
         * Returns the schema for email styles.
         *
         * @return array
         */
        public function get_schema(): array
        {
        }
    }
    /**
     * Class for replacing personalization tags with their values in the email content.
     */
    class Personalizer
    {
        /**
         * Personalization tags registry.
         *
         * @var Personalization_Tags_Registry
         */
        private \MailPoet\EmailEditor\Engine\PersonalizationTags\Personalization_Tags_Registry $tags_registry;
        /**
         * Context for personalization tags.
         *
         * The `context` is an associative array containing recipient-specific or
         * campaign-specific data. This data is used to resolve personalization tags
         * and provide input for tag callbacks during email content processing.
         *
         * Example context:
         * array(
         *     'recipient_email' => 'john@example.com', // Recipient's email
         *     'custom_field'    => 'Special Value',    // Custom campaign-specific data
         * )
         *
         * @var array<string, mixed>
         */
        private array $context;
        /**
         * Class constructor with required dependencies.
         *
         * @param Personalization_Tags_Registry $tags_registry Personalization tags registry.
         */
        public function __construct(\MailPoet\EmailEditor\Engine\PersonalizationTags\Personalization_Tags_Registry $tags_registry)
        {
        }
        /**
         * Set the context for personalization.
         *
         * The `context` provides data required for resolving personalization tags
         * during content processing. This method allows the context to be set or updated.
         *
         * Example usage:
         * $personalizer->set_context(array(
         *     'recipient_email' => 'john@example.com',
         * ));
         *
         * @param array<string, mixed> $context Associative array containing personalization data.
         * @return void
         */
        public function set_context(array $context)
        {
        }
        /**
         * Personalize the content by replacing the personalization tags with their values.
         *
         * @param string $content The content to personalize.
         * @return string The personalized content.
         */
        public function personalize_content(string $content): string
        {
        }
        /**
         * Parse a personalization tag to the token and attributes.
         *
         * @param string $token The token to parse.
         * @return array{token: string, arguments: array} The parsed token.
         */
        private function parse_token(string $token): array
        {
        }
        /**
         * Replace the href attribute of the anchor tag with the personalized value.
         * The replacement uses regular expression to match the shortcode and its attributes.
         *
         * @param string $content The content to replace the link href.
         * @param string $token Personalization tag token.
         * @param string $replacement The callback output to replace the link href.
         * @return string
         */
        private function replace_link_href(string $content, string $token, string $replacement)
        {
        }
    }
    /**
     * Class Send_Preview_Email
     *
     * This class is responsible for handling the functionality to send preview emails.
     * It is part of the email editor integrations utilities.
     *
     * @package MailPoet\EmailEditor\Integrations\Utils
     */
    class Send_Preview_Email
    {
        /**
         * Instance of the Renderer class used for rendering the editor emails.
         *
         * @var Renderer $renderer
         */
        private \MailPoet\EmailEditor\Engine\Renderer\Renderer $renderer;
        /**
         * Instance of the Personalizer class used for rendering personalization tags.
         *
         * @var Personalizer $personalizer
         */
        private \MailPoet\EmailEditor\Engine\Personalizer $personalizer;
        /**
         * Send_Preview_Email constructor.
         *
         * @param Renderer     $renderer renderer instance.
         * @param Personalizer $personalizer personalizer instance.
         */
        public function __construct(\MailPoet\EmailEditor\Engine\Renderer\Renderer $renderer, \MailPoet\EmailEditor\Engine\Personalizer $personalizer)
        {
        }
        /**
         * Sends a preview email.
         *
         * @param array $data The data required to send the preview email.
         * @return bool Returns true if the preview email was sent successfully, false otherwise.
         * @throws \Exception If the data is invalid.
         */
        public function send_preview_email($data): bool
        {
        }
        /**
         * Renders the HTML content of the post
         *
         * @param \WP_Post $post The WordPress post object.
         * @return string
         */
        public function render_html($post): string
        {
        }
        /**
         * Personalize the content.
         *
         * @param string $content HTML content.
         * @return string
         */
        public function set_personalize_content(string $content): string
        {
        }
        /**
         * Sends an email preview.
         *
         * @param string $to The recipient email address.
         * @param string $subject The subject of the email.
         * @param string $body The body content of the email.
         * @return bool Returns true if the email was sent successfully, false otherwise.
         */
        public function send_email(string $to, string $subject, string $body): bool
        {
        }
        /**
         * Sets the mail content type. Used by $this->send_email.
         *
         * @param string $content_type The content type to be set for the mail.
         * @return string The content type that was set.
         */
        public function set_mail_content_type(string $content_type): string
        {
        }
        /**
         * Validates the provided data array.
         *
         * @param array $data The data array to be validated.
         *
         * @return void
         * @throws \InvalidArgumentException If the data is invalid.
         */
        private function validate_data(array $data)
        {
        }
        /**
         * Fetches a post_id post object based on the provided post ID.
         *
         * @param int $post_id The ID of the post to fetch.
         * @return \WP_Post The WordPress post object.
         * @throws \Exception If the post is invalid.
         */
        private function fetch_post($post_id): \WP_Post
        {
        }
    }
    /**
     * Class managing the settings for the email editor.
     */
    class Settings_Controller
    {
        const ALLOWED_BLOCK_TYPES = array('core/button', 'core/buttons', 'core/paragraph', 'core/heading', 'core/column', 'core/columns', 'core/image', 'core/list', 'core/list-item', 'core/group', 'core/spacer');
        const DEFAULT_SETTINGS = array('enableCustomUnits' => array('px', '%'));
        /**
         * Theme controller.
         *
         * @var Theme_Controller
         */
        private \MailPoet\EmailEditor\Engine\Theme_Controller $theme_controller;
        /**
         * Assets for iframe editor (component styles, scripts, etc.)
         *
         * @var array
         */
        private array $iframe_assets = array();
        /**
         * Class constructor.
         *
         * @param Theme_Controller $theme_controller Theme controller.
         */
        public function __construct(\MailPoet\EmailEditor\Engine\Theme_Controller $theme_controller)
        {
        }
        /**
         * Get the settings for the email editor.
         *
         * @return array
         */
        public function get_settings(): array
        {
        }
        /**
         * Returns the layout settings for the email editor.
         *
         * @return array{contentSize: string, wideSize: string}
         */
        public function get_layout(): array
        {
        }
        /**
         * Get the email styles.
         *
         * @return array{
         *   spacing: array{
         *     blockGap: string,
         *     padding: array{bottom: string, left: string, right: string, top: string}
         *   },
         *   color: array{
         *     background: string
         *   },
         *   typography: array{
         *     fontFamily: string
         *   }
         * }
         */
        public function get_email_styles(): array
        {
        }
        /**
         * Returns the width of the layout without padding.
         *
         * @return string
         */
        public function get_layout_width_without_padding(): string
        {
        }
        /**
         * Parse styles string to array.
         *
         * @param string $styles Styles string.
         * @return array
         */
        public function parse_styles_to_array(string $styles): array
        {
        }
        /**
         * Returns float number parsed from string with pixels.
         *
         * @param string $value Value with pixels.
         * @return float
         */
        public function parse_number_from_string_with_pixels(string $value): float
        {
        }
        /**
         * Returns the theme.
         *
         * @return \WP_Theme_JSON
         */
        public function get_theme(): \WP_Theme_JSON
        {
        }
        /**
         * Translate slug to font size.
         *
         * @param string $font_size Font size slug.
         * @return string
         */
        public function translate_slug_to_font_size(string $font_size): string
        {
        }
        /**
         * Translate slug to color.
         *
         * @param string $color_slug Color slug.
         * @return string
         */
        public function translate_slug_to_color(string $color_slug): string
        {
        }
        /**
         * Method to initialize iframe assets.
         *
         * @return void
         */
        private function init_iframe_assets(): void
        {
        }
    }
    /**
     * E-mail editor works with own theme.json which defines settings for the editor and styles for the e-mail.
     * This class is responsible for accessing data defined by the theme.json.
     */
    class Theme_Controller
    {
        /**
         * Core theme loaded from the WordPress core.
         *
         * @var WP_Theme_JSON
         */
        private \WP_Theme_JSON $core_theme;
        /**
         * Base theme loaded from a file in the package directory.
         *
         * @var WP_Theme_JSON
         */
        private \WP_Theme_JSON $base_theme;
        /**
         * User theme contains user custom styles and settings
         *
         * @var User_Theme
         */
        private \MailPoet\EmailEditor\Engine\User_Theme $user_theme;
        /**
         * Theme_Controller constructor.
         */
        public function __construct()
        {
        }
        /**
         * Gets combined theme data from the core and base theme, merged with the user .
         *
         * @return WP_Theme_JSON
         */
        public function get_theme(): \WP_Theme_JSON
        {
        }
        /**
         * Gets combined theme data from the core and base theme.
         *
         * @return WP_Theme_JSON
         */
        public function get_base_theme(): \WP_Theme_JSON
        {
        }
        /**
         * Replace preset variables with their values.
         *
         * @param array $values Styles array.
         * @param array $presets Presets array.
         * @return array
         */
        private function recursive_replace_presets($values, $presets)
        {
        }
        /**
         * Replace preset variables with their values.
         *
         * @param array $styles Styles array.
         * @return array
         */
        private function recursive_extract_preset_variables($styles)
        {
        }
        /**
         * Get styles for the e-mail.
         *
         * @return array{
         *   spacing: array{
         *     blockGap: string,
         *     padding: array{bottom: string, left: string, right: string, top: string}
         *   },
         *   color: array{
         *     background: string
         *   },
         *   typography: array{
         *     fontFamily: string
         *   }
         * }
         */
        public function get_styles(): array
        {
        }
        /**
         * Get settings from the theme.
         *
         * @return array
         */
        public function get_settings(): array
        {
        }
        /**
         * Get layout settings from the theme.
         *
         * @return array{contentSize: string, wideSize: string, allowEditing?: bool, allowCustomContentAndWideSize?: bool}
         */
        public function get_layout_settings(): array
        {
        }
        /**
         * Get stylesheet from context.
         *
         * @param string $context Context.
         * @param array  $options Options.
         * @return string
         */
        public function get_stylesheet_from_context($context, $options = array()): string
        {
        }
        /**
         * Get stylesheet for rendering.
         *
         * @param WP_Post|null           $post Post object.
         * @param WP_Block_Template|null $template Template object.
         * @return string
         */
        public function get_stylesheet_for_rendering(?\WP_Post $post = null, $template = null): string
        {
        }
        /**
         * Translate font family slug to font family name.
         *
         * @param string $font_size Font size slug.
         * @return string
         */
        public function translate_slug_to_font_size(string $font_size): string
        {
        }
        /**
         * Translate color slug to color.
         *
         * @param string $color_slug Color slug.
         * @return string
         */
        public function translate_slug_to_color(string $color_slug): string
        {
        }
        /**
         * Returns the map of CSS variables and their values from the theme.
         *
         * @return array
         */
        public function get_variables_values_map(): array
        {
        }
    }
    /**
     * This class is responsible for managing and accessing theme data aka email styles created by users.
     */
    class User_Theme
    {
        private const USER_THEME_POST_NAME = 'wp-global-styles-mailpoet-email';
        private const INITIAL_THEME_DATA = array('version' => 3, 'isGlobalStylesUserThemeJSON' => true);
        /**
         * Core theme loaded from the WordPress core.
         *
         * @var WP_Post | null
         */
        private ?\WP_Post $user_theme_post = null;
        /**
         * Getter for user theme.
         *
         * @throws \Exception If the user theme post cannot be created.
         * @return WP_Theme_JSON
         */
        public function get_theme(): \WP_Theme_JSON
        {
        }
        /**
         * Getter for user theme post.
         * If the post does not exist, it will be created.
         *
         * @throws \Exception If the user theme post cannot be created.
         * @return WP_Post
         */
        public function get_user_theme_post(): \WP_Post
        {
        }
        /**
         * Ensures that the user theme post exists and is loaded.
         *
         * @throws \Exception If the user theme post cannot be created.
         */
        private function ensure_theme_post(): void
        {
        }
    }
}
namespace MailPoet\EmailEditor\Integrations\Core\Renderer\Blocks {
    /**
     * Shared functionality for block renderers.
     */
    abstract class Abstract_Block_Renderer implements \MailPoet\EmailEditor\Engine\Renderer\ContentRenderer\Block_Renderer
    {
        /**
         * Wrapper for wp_style_engine_get_styles which ensures all values are returned.
         *
         * @param array $block_styles Array of block styles.
         * @param bool  $skip_convert_vars If true, --wp_preset--spacing--x type values will be left in the original var:preset:spacing:x format.
         * @return array
         */
        protected function get_styles_from_block(array $block_styles, $skip_convert_vars = false)
        {
        }
        /**
         * Compile objects containing CSS properties to a string.
         *
         * @param array ...$styles Style arrays to compile.
         * @return string
         */
        protected function compile_css(...$styles): string
        {
        }
        /**
         * Add a spacer around the block.
         *
         * @param string $content The block content.
         * @param array  $email_attrs The email attributes.
         * @return string
         */
        protected function add_spacer($content, $email_attrs): string
        {
        }
        /**
         * Render the block.
         *
         * @param string              $block_content The block content.
         * @param array               $parsed_block The parsed block.
         * @param Settings_Controller $settings_controller The settings controller.
         * @return string
         */
        public function render(string $block_content, array $parsed_block, \MailPoet\EmailEditor\Engine\Settings_Controller $settings_controller): string
        {
        }
        /**
         * Render the block content.
         *
         * @param string              $block_content The block content.
         * @param array               $parsed_block The parsed block.
         * @param Settings_Controller $settings_controller The settings controller.
         * @return string
         */
        abstract protected function render_content(string $block_content, array $parsed_block, \MailPoet\EmailEditor\Engine\Settings_Controller $settings_controller): string;
    }
    /**
     * Renders a button block.
     *
     * @see https://www.activecampaign.com/blog/email-buttons
     * @see https://documentation.mjml.io/#mj-button
     */
    class Button extends \MailPoet\EmailEditor\Integrations\Core\Renderer\Blocks\Abstract_Block_Renderer
    {
        /**
         * Get styles for the wrapper element.
         *
         * @param array $block_styles Block styles.
         * @return object{css: string, classname: string}
         */
        private function get_wrapper_styles(array $block_styles)
        {
        }
        /**
         * Get styles for the link element.
         *
         * @param array $block_styles Block styles.
         * @return object{css: string, classname: string}
         */
        private function get_link_styles(array $block_styles)
        {
        }
        /**
         * Renders the block.
         *
         * @param string              $block_content Block content.
         * @param array               $parsed_block Parsed block.
         * @param Settings_Controller $settings_controller Settings controller.
         * @return string
         */
        public function render(string $block_content, array $parsed_block, \MailPoet\EmailEditor\Engine\Settings_Controller $settings_controller): string
        {
        }
        /**
         * Renders the block content.
         *
         * @param string              $block_content Block content.
         * @param array               $parsed_block Parsed block.
         * @param Settings_Controller $settings_controller Settings controller.
         * @return string
         */
        protected function render_content($block_content, array $parsed_block, \MailPoet\EmailEditor\Engine\Settings_Controller $settings_controller): string
        {
        }
    }
    /**
     * Renders a buttons block.
     */
    class Buttons extends \MailPoet\EmailEditor\Integrations\Core\Renderer\Blocks\Abstract_Block_Renderer
    {
        /**
         * Provides the Flex_Layout_Renderer instance.
         *
         * @var Flex_Layout_Renderer
         */
        private $flex_layout_renderer;
        /**
         * Buttons constructor.
         *
         * @param Flex_Layout_Renderer $flex_layout_renderer Flex layout renderer.
         */
        public function __construct(\MailPoet\EmailEditor\Engine\Renderer\ContentRenderer\Layout\Flex_Layout_Renderer $flex_layout_renderer)
        {
        }
        /**
         * Renders the block content.
         *
         * @param string              $block_content Block content.
         * @param array               $parsed_block Parsed block.
         * @param Settings_Controller $settings_controller Settings controller.
         * @return string
         */
        protected function render_content($block_content, array $parsed_block, \MailPoet\EmailEditor\Engine\Settings_Controller $settings_controller): string
        {
        }
    }
    /**
     * Renders a column block.
     */
    class Column extends \MailPoet\EmailEditor\Integrations\Core\Renderer\Blocks\Abstract_Block_Renderer
    {
        /**
         * Override this method to disable spacing (block gap) for columns.
         * Spacing is applied on wrapping columns block. Columns are rendered side by side so no spacer is needed.
         *
         * @param string $content Content.
         * @param array  $email_attrs Email attributes.
         */
        protected function add_spacer($content, $email_attrs): string
        {
        }
        /**
         * Renders the block content.
         *
         * @param string              $block_content Block content.
         * @param array               $parsed_block Parsed block.
         * @param Settings_Controller $settings_controller Settings controller.
         * @return string
         */
        protected function render_content(string $block_content, array $parsed_block, \MailPoet\EmailEditor\Engine\Settings_Controller $settings_controller): string
        {
        }
        /**
         * Based on MJML <mj-column>
         *
         * @param string              $block_content Block content.
         * @param array               $parsed_block Parsed block.
         * @param Settings_Controller $settings_controller Settings controller.
         */
        private function get_block_wrapper(string $block_content, array $parsed_block, \MailPoet\EmailEditor\Engine\Settings_Controller $settings_controller): string
        {
        }
    }
    /**
     * Renders a columns block.
     */
    class Columns extends \MailPoet\EmailEditor\Integrations\Core\Renderer\Blocks\Abstract_Block_Renderer
    {
        /**
         * Override this method to disable spacing (block gap) for columns.
         * Spacing is applied on wrapping columns block. Columns are rendered side by side so no spacer is needed.
         *
         * @param string              $block_content Block content.
         * @param array               $parsed_block Parsed block.
         * @param Settings_Controller $settings_controller Settings controller.
         */
        protected function render_content(string $block_content, array $parsed_block, \MailPoet\EmailEditor\Engine\Settings_Controller $settings_controller): string
        {
        }
        /**
         * Based on MJML <mj-section>
         *
         * @param string              $block_content Block content.
         * @param array               $parsed_block Parsed block.
         * @param Settings_Controller $settings_controller Settings controller.
         */
        private function getBlockWrapper(string $block_content, array $parsed_block, \MailPoet\EmailEditor\Engine\Settings_Controller $settings_controller): string
        {
        }
    }
    /**
     * Fallback block renderer.
     * This renderer is used when no specific renderer is found for a block.
     *
     * AbstractBlockRenderer applies some adjustments to the block content, like adding spacers.
     * By using fallback renderer for all blocks we apply there adjustments to all blocks that don't have any renderer.
     *
     * We need to find a better abstraction/architecture for this.
     */
    class Fallback extends \MailPoet\EmailEditor\Integrations\Core\Renderer\Blocks\Abstract_Block_Renderer
    {
        /**
         * Renders the block content.
         *
         * @param string              $block_content Block content.
         * @param array               $parsed_block Parsed block.
         * @param Settings_Controller $settings_controller Settings controller.
         * @return string
         */
        protected function render_content($block_content, array $parsed_block, \MailPoet\EmailEditor\Engine\Settings_Controller $settings_controller): string
        {
        }
    }
    /**
     * Renders a group block.
     */
    class Group extends \MailPoet\EmailEditor\Integrations\Core\Renderer\Blocks\Abstract_Block_Renderer
    {
        /**
         * Renders the block content.
         *
         * @param string              $block_content Block content.
         * @param array               $parsed_block Parsed block.
         * @param Settings_Controller $settings_controller Settings controller.
         * @return string
         */
        protected function render_content(string $block_content, array $parsed_block, \MailPoet\EmailEditor\Engine\Settings_Controller $settings_controller): string
        {
        }
        /**
         * Returns the block wrapper.
         *
         * @param string              $block_content Block content.
         * @param array               $parsed_block Parsed block.
         * @param Settings_Controller $settings_controller Settings controller.
         */
        private function get_block_wrapper(string $block_content, array $parsed_block, \MailPoet\EmailEditor\Engine\Settings_Controller $settings_controller): string
        {
        }
    }
    /**
     * Renders an image block.
     */
    class Image extends \MailPoet\EmailEditor\Integrations\Core\Renderer\Blocks\Abstract_Block_Renderer
    {
        /**
         * Renders the block content.
         *
         * @param string              $block_content Block content.
         * @param array               $parsed_block Parsed block.
         * @param Settings_Controller $settings_controller Settings controller.
         */
        protected function render_content($block_content, array $parsed_block, \MailPoet\EmailEditor\Engine\Settings_Controller $settings_controller): string
        {
        }
        /**
         * Apply rounded style to the image.
         *
         * @param string $block_content Block content.
         * @param array  $parsed_block Parsed block.
         */
        private function apply_rounded_style(string $block_content, array $parsed_block): string
        {
        }
        /**
         * When the width is not set, it's important to get it for the image to be displayed correctly
         *
         * @param array               $parsed_block Parsed block.
         * @param string              $image_url Image URL.
         * @param Settings_Controller $settings_controller Settings controller.
         */
        private function add_image_size_when_missing(array $parsed_block, string $image_url, \MailPoet\EmailEditor\Engine\Settings_Controller $settings_controller): array
        {
        }
        /**
         * Apply border style to the image.
         *
         * @param string $block_content Block content.
         * @param array  $parsed_block Parsed block.
         * @param string $class_name Class name.
         */
        private function apply_image_border_style(string $block_content, array $parsed_block, string $class_name): string
        {
        }
        /**
         * Settings width and height attributes for images is important for MS Outlook.
         *
         * @param string              $block_content Block content.
         * @param array               $parsed_block Parsed block.
         * @param Settings_Controller $settings_controller Settings controller.
         */
        private function addImageDimensions($block_content, array $parsed_block, \MailPoet\EmailEditor\Engine\Settings_Controller $settings_controller): string
        {
        }
        /**
         * This method configure the font size of the caption because it's set to 0 for the parent element to avoid unexpected white spaces
         * We try to use font-size passed down from the parent element $parsedBlock['email_attrs']['font-size'], but if it's not set, we use the default font-size from the email theme.
         *
         * @param Settings_Controller $settings_controller Settings controller.
         * @param array               $parsed_block Parsed block.
         */
        private function get_caption_styles(\MailPoet\EmailEditor\Engine\Settings_Controller $settings_controller, array $parsed_block): string
        {
        }
        /**
         * Based on MJML <mj-image> but because MJML doesn't support captions, our solution is a bit different
         *
         * @param array               $parsed_block Parsed block.
         * @param Settings_Controller $settings_controller Settings controller.
         * @param string|null         $caption Caption.
         */
        private function get_block_wrapper(array $parsed_block, \MailPoet\EmailEditor\Engine\Settings_Controller $settings_controller, ?string $caption): string
        {
        }
        /**
         * Add style to the element.
         *
         * @param string                                       $block_content Block content.
         * @param array{tag_name: string, class_name?: string} $tag Tag to add style to.
         * @param string                                       $style Style to add.
         */
        private function add_style_to_element($block_content, array $tag, string $style): string
        {
        }
        /**
         * Remove style attribute from the element.
         *
         * @param string                                       $block_content Block content.
         * @param array{tag_name: string, class_name?: string} $tag Tag to remove style from.
         * @param string                                       $style_name Name of the style to remove.
         */
        private function remove_style_attribute_from_element($block_content, array $tag, string $style_name): string
        {
        }
        /**
         * Parse block content to get image URL, image HTML and caption HTML.
         *
         * @param string $block_content Block content.
         * @return array{imageUrl: string, image: string, caption: string, class: string}|null
         */
        private function parse_block_content(string $block_content): ?array
        {
        }
        /**
         * Cleanup image HTML.
         *
         * @param string $content_html Content HTML.
         */
        private function cleanup_image_html(string $content_html): string
        {
        }
    }
    /**
     * Renders a list block.
     * We have to avoid using keyword `List`
     */
    class List_Block extends \MailPoet\EmailEditor\Integrations\Core\Renderer\Blocks\Abstract_Block_Renderer
    {
        /**
         * Renders the block content.
         *
         * @param string              $block_content Block content.
         * @param array               $parsed_block Parsed block.
         * @param Settings_Controller $settings_controller Settings controller.
         * @return string
         */
        protected function render_content(string $block_content, array $parsed_block, \MailPoet\EmailEditor\Engine\Settings_Controller $settings_controller): string
        {
        }
    }
    /**
     * Renders a list item block.
     */
    class List_Item extends \MailPoet\EmailEditor\Integrations\Core\Renderer\Blocks\Abstract_Block_Renderer
    {
        /**
         * Override this method to disable spacing (block gap) for list items.
         *
         * @param string $content Content.
         * @param array  $email_attrs Email attributes.
         */
        protected function add_spacer($content, $email_attrs): string
        {
        }
        /**
         * Renders the block content.
         *
         * @param string              $block_content Block content.
         * @param array               $parsed_block Parsed block.
         * @param Settings_Controller $settings_controller Settings controller.
         * @return string
         */
        protected function render_content($block_content, array $parsed_block, \MailPoet\EmailEditor\Engine\Settings_Controller $settings_controller): string
        {
        }
    }
    /**
     * This renderer covers both core/paragraph and core/heading blocks
     */
    class Text extends \MailPoet\EmailEditor\Integrations\Core\Renderer\Blocks\Abstract_Block_Renderer
    {
        /**
         * Renders the block content.
         *
         * @param string              $block_content Block content.
         * @param array               $parsed_block Parsed block.
         * @param Settings_Controller $settings_controller Settings controller.
         */
        protected function render_content(string $block_content, array $parsed_block, \MailPoet\EmailEditor\Engine\Settings_Controller $settings_controller): string
        {
        }
        /**
         * 1) We need to remove padding because we render padding on wrapping table cell
         * 2) We also need to replace font-size to avoid clamp() because clamp() is not supported in many email clients.
         * The font size values is automatically converted to clamp() when WP site theme is configured to use fluid layouts.
         * Currently (WP 6.5), there is no way to disable this behavior.
         *
         * @param string $block_content Block content.
         */
        private function adjustStyleAttribute(string $block_content): string
        {
        }
    }
}
namespace MailPoet\EmailEditor\Integrations\Core {
    /**
     * Initializes the core blocks renderers.
     */
    class Initializer
    {
        /**
         * Initializes the core blocks renderers.
         */
        public function initialize(): void
        {
        }
        /**
         * Register core blocks email renderers when the blocks renderer is initialized.
         *
         * @param Blocks_Registry $blocks_registry Blocks registry.
         */
        public function register_core_blocks_renderers(\MailPoet\EmailEditor\Engine\Renderer\ContentRenderer\Blocks_Registry $blocks_registry): void
        {
        }
        /**
         * Adjusts the editor's theme to add blocks specific settings for core blocks.
         *
         * @param \WP_Theme_JSON $editor_theme_json Editor theme JSON.
         */
        public function adjust_theme_json(\WP_Theme_JSON $editor_theme_json): \WP_Theme_JSON
        {
        }
        /**
         * Allow styles for the email editor.
         *
         * @param array|null $allowed_styles Allowed styles.
         */
        public function allow_styles(?array $allowed_styles): array
        {
        }
    }
}
namespace MailPoet\EmailEditor\Integrations\Utils {
    /**
     * This class should guarantee that our work with the DOMDocument is unified and safe.
     */
    class Dom_Document_Helper
    {
        /**
         * Instance of the DOMDocument.
         *
         * @var \DOMDocument
         */
        private \DOMDocument $dom;
        /**
         * Constructor.
         *
         * @param string $html_content The HTML content to load.
         */
        public function __construct(string $html_content)
        {
        }
        /**
         * Loads the given HTML content into the DOMDocument.
         *
         * @param string $html_content The HTML content to load.
         */
        private function load_html(string $html_content): void
        {
        }
        /**
         * Searches for the first appearance of the given tag name.
         *
         * @param string $tag_name The tag name to search for.
         */
        public function find_element(string $tag_name): ?\DOMElement
        {
        }
        /**
         * Returns the value of the given attribute from the given element.
         *
         * @param \DOMElement $element The element to get the attribute value from.
         * @param string      $attribute The attribute to get the value from.
         */
        public function get_attribute_value(\DOMElement $element, string $attribute): string
        {
        }
        /**
         * Searches for the first appearance of the given tag name and returns the value of specified attribute.
         *
         * @param string $tag_name The tag name to search for.
         * @param string $attribute The attribute to get the value from.
         */
        public function get_attribute_value_by_tag_name(string $tag_name, string $attribute): ?string
        {
        }
        /**
         * Returns the outer HTML of the given element.
         *
         * @param \DOMElement $element The element to get the outer HTML from.
         */
        public function get_outer_html(\DOMElement $element): string
        {
        }
        /**
         * Returns the inner HTML of the given element.
         *
         * @param \DOMElement $element The element to get the inner HTML from.
         */
        public function get_element_inner_html(\DOMElement $element): string
        {
        }
    }
}
namespace MailPoet\EmailEditor {
    /**
     * Main package class.
     */
    class Package
    {
        /**
         * Version.
         *
         * @var string
         */
        const VERSION = '0.1.0';
        /**
         * Init the package.
         */
        public static function init()
        {
        }
        /**
         * Return the version of the package.
         *
         * @return string
         */
        public static function get_version()
        {
        }
        /**
         * Return the path to the package.
         *
         * @return string
         */
        public static function get_path()
        {
        }
    }
}
namespace MailPoet\EmailEditor\Validator {
    /**
     * Represents abastract schema.
     */
    abstract class Schema
    {
        /**
         * Schema definition.
         *
         * @var array
         */
        protected $schema = array();
        /**
         * Sets the schema as nullable.
         *
         * @return static
         */
        public function nullable()
        {
        }
        /**
         * Sets the schema as non-nullable.
         *
         * @return static
         */
        public function non_nullable()
        {
        }
        /**
         * Sets the schema as required.
         *
         * @return static
         */
        public function required()
        {
        }
        /**
         * Unsets the required property.
         *
         * @return static
         */
        public function optional()
        {
        }
        /**
         * Set the title of the schema.
         *
         * @param string $title Title.
         * @return static
         */
        public function title(string $title)
        {
        }
        /**
         * Set the description of the schema.
         *
         * @param string $description Description.
         * @return static
         */
        public function description(string $description)
        {
        }
        /**
         * Set the default value.
         *
         * @param mixed $default_value Default value.
         * @return static
         */
        public function default($default_value)
        {
        }
        /**
         * Set the field name and value.
         *
         * @param string $name Name of the field.
         * @param mixed  $value Value of the field.
         * @return static
         * @throws \Exception When the field name is reserved.
         */
        public function field(string $name, $value)
        {
        }
        /**
         * Returns the schema as an array.
         */
        public function to_array(): array
        {
        }
        /**
         * Returns the schema as a JSON string.
         *
         * @throws \Exception When the schema cannot be converted to JSON.
         */
        public function to_string(): string
        {
        }
        /**
         * Updates the schema property.
         *
         * @param string $name Property name.
         * @param mixed  $value Property value.
         * @return static
         */
        protected function update_schema_property(string $name, $value)
        {
        }
        /**
         * Unsets the schema property.
         *
         * @param string $name Property name.
         * @return static
         */
        protected function unset_schema_property(string $name)
        {
        }
        /**
         * Returns reserved keywords.
         *
         * @return string[]
         */
        protected function get_reserved_keywords(): array
        {
        }
        /**
         * Validates the regular expression pattern.
         *
         * @param string $pattern Regular expression pattern.
         * @throws \Exception When the pattern is invalid.
         */
        protected function validate_pattern(string $pattern): void
        {
        }
    }
}
namespace MailPoet\EmailEditor\Validator\Schema {
    /**
     * Represents a schema that allows a value to match any of the given schemas.
     * See: https://developer.wordpress.org/rest-api/extending-the-rest-api/schema/#oneof-and-anyof
     */
    class Any_Of_Schema extends \MailPoet\EmailEditor\Validator\Schema
    {
        /**
         * Schema definition.
         *
         * @var array[]
         */
        protected $schema = array('anyOf' => array());
        /**
         * Any_Of_Schema constructor.
         *
         * @param Schema[] $schemas List of schemas.
         */
        public function __construct(array $schemas)
        {
        }
        /**
         * Returns the schema as an array.
         */
        public function nullable(): self
        {
        }
        /**
         * Returns the schema as an array.
         */
        public function non_nullable(): self
        {
        }
    }
    /**
     * Represents a schema for an array.
     * See: https://developer.wordpress.org/rest-api/extending-the-rest-api/schema/#arrays
     */
    class Array_Schema extends \MailPoet\EmailEditor\Validator\Schema
    {
        /**
         * Schema definition.
         *
         * @var array
         */
        protected $schema = array('type' => 'array');
        /**
         * Sets the schema for the items in the array.
         *
         * @param Schema $schema Schema for the items in the array.
         */
        public function items(\MailPoet\EmailEditor\Validator\Schema $schema): self
        {
        }
        /**
         * Sets the minimum number of items in the array.
         *
         * @param int $value Minimum number of items in the array.
         */
        public function minItems(int $value): self
        {
        }
        /**
         * Sets the maximum number of items in the array.
         *
         * @param int $value Maximum number of items in the array.
         */
        public function maxItems(int $value): self
        {
        }
        /**
         * Sets the uniqueItems property to true.
         */
        public function uniqueItems(): self
        {
        }
    }
    /**
     * Represents a schema for a boolean.
     * See: https://developer.wordpress.org/rest-api/extending-the-rest-api/schema/#primitive-types
     */
    class Boolean_Schema extends \MailPoet\EmailEditor\Validator\Schema
    {
        /**
         * Schema definition.
         *
         * @var array
         */
        protected $schema = array('type' => 'boolean');
    }
    /**
     * Represents a schema for an integer.
     * See: https://developer.wordpress.org/rest-api/extending-the-rest-api/schema/#numbers
     */
    class Integer_Schema extends \MailPoet\EmailEditor\Validator\Schema
    {
        /**
         * Schema definition.
         *
         * @var array
         */
        protected $schema = array('type' => 'integer');
        /**
         * Sets the minimum value of the integer.
         *
         * @param int $value Minimum value of the integer.
         */
        public function minimum(int $value): self
        {
        }
        /**
         * Sets the exclusiveMinimum property to true.
         *
         * @param int $value Minimum value of the integer.
         */
        public function exclusiveMinimum(int $value): self
        {
        }
        /**
         * Sets the maximum value of the integer.
         *
         * @param int $value Maximum value of the integer.
         */
        public function maximum(int $value): self
        {
        }
        /**
         * Sets the exclusiveMaximum property to true.
         *
         * @param int $value Maximum value of the integer.
         */
        public function exclusiveMaximum(int $value): self
        {
        }
        /**
         * Sets the multipleOf property.
         *
         * @param int $value Multiple of the integer.
         */
        public function multipleOf(int $value): self
        {
        }
    }
    /**
     * Represents a schema for a null.
     * See: https://developer.wordpress.org/rest-api/extending-the-rest-api/schema/#primitive-types
     */
    class Null_Schema extends \MailPoet\EmailEditor\Validator\Schema
    {
        /**
         * Schema definition.
         *
         * @var array
         */
        protected $schema = array('type' => 'null');
    }
    /**
     * Represents a schema for a number.
     * See: https://developer.wordpress.org/rest-api/extending-the-rest-api/schema/#numbers
     */
    class Number_Schema extends \MailPoet\EmailEditor\Validator\Schema
    {
        /**
         * Schema definition.
         *
         * @var array
         */
        protected $schema = array('type' => 'number');
        /**
         * Sets the minimum value of the number.
         *
         * @param float $value Minimum value of the number.
         */
        public function minimum(float $value): self
        {
        }
        /**
         * Sets the exclusiveMinimum property to true.
         *
         * @param float $value Minimum value of the number.
         */
        public function exclusiveMinimum(float $value): self
        {
        }
        /**
         * Sets the maximum value of the number.
         *
         * @param float $value Maximum value of the number.
         */
        public function maximum(float $value): self
        {
        }
        /**
         * Sets the exclusiveMaximum property to true.
         *
         * @param float $value Maximum value of the number.
         */
        public function exclusiveMaximum(float $value): self
        {
        }
        /**
         * Sets the multipleOf property.
         *
         * @param float $value Multiple of the number.
         */
        public function multipleOf(float $value): self
        {
        }
    }
    /**
     * Represents a schema for an object.
     * See: https://developer.wordpress.org/rest-api/extending-the-rest-api/schema/#objects
     */
    class Object_Schema extends \MailPoet\EmailEditor\Validator\Schema
    {
        /**
         * Schema definition.
         *
         * @var array
         */
        protected $schema = array('type' => 'object');
        /**
         * Set the required properties of the object.
         *
         * @param array<string, Schema> $properties Required properties.
         */
        public function properties(array $properties): self
        {
        }
        /**
         * Set the required properties of the object.
         *
         * @param Schema $schema Schema of the additional properties.
         */
        public function additionalProperties(\MailPoet\EmailEditor\Validator\Schema $schema): self
        {
        }
        /**
         * Disables additional properties.
         */
        public function disableAdditionalProperties(): self
        {
        }
        /**
         * Keys of $properties are regular expressions without leading/trailing delimiters.
         * See: https://developer.wordpress.org/rest-api/extending-the-rest-api/schema/#patternproperties
         *
         * @param array<string, Schema> $properties Regular expressions and their schemas.
         */
        public function patternProperties(array $properties): self
        {
        }
        /**
         * Sets the minimum number of properties in the object.
         *
         * @param int $value Minimum number of properties in the object.
         */
        public function minProperties(int $value): self
        {
        }
        /**
         * Sets the maximum number of properties in the object.
         *
         * @param int $value Maximum number of properties in the object.
         */
        public function maxProperties(int $value): self
        {
        }
    }
    /**
     * Represents a schema that allows a value to match one of the given schemas.
     * See: https://developer.wordpress.org/rest-api/extending-the-rest-api/schema/#oneof-and-anyof
     */
    class One_Of_Schema extends \MailPoet\EmailEditor\Validator\Schema
    {
        /**
         * Schema definition.
         *
         * @var array
         */
        protected $schema = array('oneOf' => array());
        /**
         * One_Of_Schema constructor.
         *
         * @param Schema[] $schemas List of schemas.
         */
        public function __construct(array $schemas)
        {
        }
        /**
         * Sets the schema as nullable.
         */
        public function nullable(): self
        {
        }
        /**
         * Sets the schema as non-nullable.
         */
        public function non_nullable(): self
        {
        }
    }
    /**
     * Represents a schema for a string.
     * See: https://developer.wordpress.org/rest-api/extending-the-rest-api/schema/#strings
     */
    class String_Schema extends \MailPoet\EmailEditor\Validator\Schema
    {
        /**
         * Schema definition.
         *
         * @var array
         */
        protected $schema = array('type' => 'string');
        /**
         * Set minimum length of the string.
         *
         * @param int $value Minimum length.
         */
        public function minLength(int $value): self
        {
        }
        /**
         * Set maximum length of the string.
         *
         * @param int $value Maximum length.
         */
        public function maxLength(int $value): self
        {
        }
        /**
         * Parameter $pattern is a regular expression without leading/trailing delimiters.
         * See: https://developer.wordpress.org/rest-api/extending-the-rest-api/schema/#pattern
         *
         * @param string $pattern Regular expression pattern.
         */
        public function pattern(string $pattern): self
        {
        }
        /**
         * Set the format of the string according to DateTime.
         */
        public function formatDateTime(): self
        {
        }
        /**
         * Set the format of the string according to email.
         */
        public function formatEmail(): self
        {
        }
        /**
         * Set the format of the string according to Hex color.
         */
        public function formatHexColor(): self
        {
        }
        /**
         * Set the format of the string according to IP address.
         */
        public function formatIp(): self
        {
        }
        /**
         * Set the format of the string according to uri.
         */
        public function formatUri(): self
        {
        }
        /**
         * Set the format of the string according to uuid.
         */
        public function formatUuid(): self
        {
        }
    }
}
namespace MailPoet\EmailEditor\Validator {
    /**
     * Builder for creating schema objects.
     * See: https://developer.wordpress.org/rest-api/extending-the-rest-api/schema/
     */
    class Builder
    {
        /**
         * Creates a schema for a string.
         */
        public static function string(): \MailPoet\EmailEditor\Validator\Schema\String_Schema
        {
        }
        /**
         * Creates a schema for a number.
         */
        public static function number(): \MailPoet\EmailEditor\Validator\Schema\Number_Schema
        {
        }
        /**
         * Creates a schema for an integer.
         */
        public static function integer(): \MailPoet\EmailEditor\Validator\Schema\Integer_Schema
        {
        }
        /**
         * Creates a schema for a boolean.
         */
        public static function boolean(): \MailPoet\EmailEditor\Validator\Schema\Boolean_Schema
        {
        }
        /**
         * Creates a schema for null.
         */
        public static function null(): \MailPoet\EmailEditor\Validator\Schema\Null_Schema
        {
        }
        /**
         * Creates a schema for an array.
         *
         * @param Schema|null $items Schema of the items in the array.
         */
        public static function array(?\MailPoet\EmailEditor\Validator\Schema $items = null): \MailPoet\EmailEditor\Validator\Schema\Array_Schema
        {
        }
        /**
         * Creates a schema for an object.
         *
         * @param array<string, Schema>|null $properties Properties of the object.
         */
        public static function object(?array $properties = null): \MailPoet\EmailEditor\Validator\Schema\Object_Schema
        {
        }
        /**
         * Creates a schema that allows a value to match one of the given schemas.
         *
         * @param Schema[] $schemas List of schemas.
         */
        public static function one_of(array $schemas): \MailPoet\EmailEditor\Validator\Schema\One_Of_Schema
        {
        }
        /**
         * Creates a schema that allows a value to match any of the given schemas.
         *
         * @param Schema[] $schemas List of schemas.
         */
        public static function any_of(array $schemas): \MailPoet\EmailEditor\Validator\Schema\Any_Of_Schema
        {
        }
    }
}
namespace MailPoet\EmailEditor {
    /**
     * Provides information for converting exceptions to HTTP responses.
     */
    interface HttpAwareException
    {
        public function getHttpStatusCode(): int;
    }
    /**
     * Frames all exceptions ("$e instanceof MailPoet\EmailEditor\Exception").
     */
    abstract class Exception extends \Exception
    {
        /** @var string[] */
        private $errors = [];
        final public function __construct(string $message = '', int $code = 0, \Throwable $previous = null)
        {
        }
        /** @return static */
        public static function create(\Throwable $previous = null)
        {
        }
        /** @return static */
        public function withMessage(string $message)
        {
        }
        /** @return static */
        public function withCode(int $code)
        {
        }
        /** @return static */
        public function withErrors(array $errors)
        {
        }
        /** @return static */
        public function withError(string $id, string $error)
        {
        }
        public function getErrors(): array
        {
        }
    }
    /**
     * USE: Generic runtime error. When possible, use a more specific exception instead.
     * API: 500 Server Error (not HTTP-aware)
     */
    class RuntimeException extends \MailPoet\EmailEditor\Exception
    {
    }
    /**
     * USE: When wrong data VALUE is received.
     * API: 400 Bad Request
     */
    class UnexpectedValueException extends \MailPoet\EmailEditor\RuntimeException implements \MailPoet\EmailEditor\HttpAwareException
    {
        public function getHttpStatusCode(): int
        {
        }
    }
}
namespace MailPoet\EmailEditor\Validator {
    /**
     * Exception thrown when validation fails.
     */
    class Validation_Exception extends \MailPoet\EmailEditor\UnexpectedValueException
    {
        /**
         * WP_Error instance.
         *
         * @var WP_Error
         */
        protected $wp_error;
        /**
         * Creates a new instance of the exception.
         *
         * @param WP_Error $wp_error WP_Error instance.
         */
        public static function create_from_wp_error(\WP_Error $wp_error): self
        {
        }
        /**
         * Returns the WP_Error instance.
         */
        public function get_wp_error(): \WP_Error
        {
        }
    }
    /**
     * Validates and sanitizes values based on a schema.
     */
    class Validator
    {
        /**
         * Strict validation & sanitization implementation.
         * It only coerces int to float (e.g. 5 to 5.0).
         *
         * @param Schema $schema The schema to validate against.
         * @param mixed  $value The value to validate.
         * @param string $param_name The parameter name.
         * @return mixed
         */
        public function validate(\MailPoet\EmailEditor\Validator\Schema $schema, $value, string $param_name = 'value')
        {
        }
        /**
         * Strict validation & sanitization implementation.
         * It only coerces int to float (e.g. 5 to 5.0).
         *
         * @param array  $schema The array must follow the format, which is returned from Schema::toArray().
         * @param mixed  $value The value to validate.
         * @param string $param_name The parameter name.
         * @return mixed
         * @throws Validation_Exception If the value does not match the schema.
         */
        public function validate_schema_array(array $schema, $value, string $param_name = 'value')
        {
        }
        /**
         * Mirrors rest_validate_value_from_schema() and rest_sanitize_value_from_schema().
         *
         * @param mixed  $value The value to validate.
         * @param array  $schema The schema to validate against.
         * @param string $param_name The parameter name.
         * @return mixed|WP_Error
         */
        private function validate_and_sanitize_value_from_schema($value, array $schema, string $param_name)
        {
        }
        /**
         * Mirrors rest_find_any_matching_schema().
         *
         * @param mixed  $value The value to validate.
         * @param array  $any_of_schema The schema to validate against.
         * @param string $param_name The parameter name.
         * @return mixed|WP_Error
         */
        private function validate_and_sanitize_any_of($value, array $any_of_schema, string $param_name)
        {
        }
        /**
         * Mirrors rest_find_one_matching_schema().
         *
         * @param mixed  $value The value to validate.
         * @param array  $one_of_schema The schema to validate against.
         * @param string $param_name The parameter name.
         * @return mixed|WP_Error
         */
        private function validate_and_sanitize_one_of($value, array $one_of_schema, string $param_name)
        {
        }
        /**
         * Returns a WP_Error for a type mismatch.
         *
         * @param string          $param The parameter name.
         * @param string|string[] $type The expected type.
         */
        private function get_type_error(string $param, $type): \WP_Error
        {
        }
    }
}
namespace MailPoet\EmailEditor {
    /**
     * Class Container is a simple dependency injection container.
     *
     * @package MailPoet\EmailEditor
     */
    class Container
    {
        /**
         * A list of registered services
         *
         * @var array $services
         */
        protected array $services = array();
        /**
         * A list of created instances
         *
         * @var array
         */
        protected array $instances = array();
        /**
         * The method for registering a new service
         *
         * @param string   $name    The name of the service.
         * @param callable $callback The callable that will be used to create the service.
         * @return void
         */
        public function set(string $name, callable $callback): void
        {
        }
        /**
         * Method for getting a registered service
         *
         * @template T
         * @param class-string<T> $name The name of the service.
         * @return T
         * @throws \Exception If the service is not found.
         */
        public function get($name)
        {
        }
    }
    class EmailCssInliner implements \MailPoet\EmailEditor\Engine\Renderer\Css_Inliner
    {
        private \Pelago\Emogrifier\CssInliner $inliner;
        public function from_html(string $unprocessed_html): self
        {
        }
        public function inline_css(string $css = ''): self
        {
        }
        public function render(): string
        {
        }
    }
    /**
     * USE: When an action is forbidden for given actor (although generally valid).
     * API: 403 Forbidden
     */
    class AccessDeniedException extends \MailPoet\EmailEditor\UnexpectedValueException implements \MailPoet\EmailEditor\HttpAwareException
    {
        public function getHttpStatusCode(): int
        {
        }
    }
    /**
     * USE: When the main resource we're interested in doesn't exist.
     * API: 404 Not Found
     */
    class NotFoundException extends \MailPoet\EmailEditor\UnexpectedValueException implements \MailPoet\EmailEditor\HttpAwareException
    {
        public function getHttpStatusCode(): int
        {
        }
    }
    /**
     * USE: When the main action produces conflict (i.e. duplicate key).
     * API: 409 Conflict
     */
    class ConflictException extends \MailPoet\EmailEditor\UnexpectedValueException implements \MailPoet\EmailEditor\HttpAwareException
    {
        public function getHttpStatusCode(): int
        {
        }
    }
    /**
     * USE: An application state that should not occur. Can be subclassed for feature-specific exceptions.
     * API: 500 Server Error (not HTTP-aware)
     */
    class InvalidStateException extends \MailPoet\EmailEditor\RuntimeException
    {
    }
    class NewsletterProcessingException extends \MailPoet\EmailEditor\Exception
    {
    }
}
namespace {
    // WRCS: DEFINED_VERSION.
    // phpcs:disable Generic.Functions.OpeningFunctionBraceKernighanRitchie.ContentAfterBrace
    /**
     * Registers this version of Action Scheduler.
     */
    function action_scheduler_register_3_dot_9_dot_2()
    {
    }
    // phpcs:disable Generic.Functions.OpeningFunctionBraceKernighanRitchie.ContentAfterBrace
    /**
     * Initializes this version of Action Scheduler.
     */
    function action_scheduler_initialize_3_dot_9_dot_2()
    {
    }
    /**
     * Deprecated API functions for scheduling actions
     *
     * Functions with the wc prefix were deprecated to avoid confusion with
     * Action Scheduler being included in WooCommerce core, and it providing
     * a different set of APIs for working with the action queue.
     *
     * @package ActionScheduler
     */
    /**
     * Schedule an action to run one time.
     *
     * @param int    $timestamp When the job will run.
     * @param string $hook The hook to trigger.
     * @param array  $args Arguments to pass when the hook triggers.
     * @param string $group The group to assign this job to.
     *
     * @return string The job ID
     */
    function wc_schedule_single_action($timestamp, $hook, $args = array(), $group = '')
    {
    }
    /**
     * Schedule a recurring action.
     *
     * @param int    $timestamp When the first instance of the job will run.
     * @param int    $interval_in_seconds How long to wait between runs.
     * @param string $hook The hook to trigger.
     * @param array  $args Arguments to pass when the hook triggers.
     * @param string $group The group to assign this job to.
     *
     * @deprecated 2.1.0
     *
     * @return string The job ID
     */
    function wc_schedule_recurring_action($timestamp, $interval_in_seconds, $hook, $args = array(), $group = '')
    {
    }
    /**
     * Schedule an action that recurs on a cron-like schedule.
     *
     * @param int    $timestamp The schedule will start on or after this time.
     * @param string $schedule A cron-link schedule string.
     * @see http://en.wikipedia.org/wiki/Cron
     *   *    *    *    *    *    *
     *   ┬    ┬    ┬    ┬    ┬    ┬
     *   |    |    |    |    |    |
     *   |    |    |    |    |    + year [optional]
     *   |    |    |    |    +----- day of week (0 - 7) (Sunday=0 or 7)
     *   |    |    |    +---------- month (1 - 12)
     *   |    |    +--------------- day of month (1 - 31)
     *   |    +-------------------- hour (0 - 23)
     *   +------------------------- min (0 - 59)
     * @param string $hook The hook to trigger.
     * @param array  $args Arguments to pass when the hook triggers.
     * @param string $group The group to assign this job to.
     *
     * @deprecated 2.1.0
     *
     * @return string The job ID
     */
    function wc_schedule_cron_action($timestamp, $schedule, $hook, $args = array(), $group = '')
    {
    }
    /**
     * Cancel the next occurrence of a job.
     *
     * @param string $hook The hook that the job will trigger.
     * @param array  $args Args that would have been passed to the job.
     * @param string $group Action's group.
     *
     * @deprecated 2.1.0
     */
    function wc_unschedule_action($hook, $args = array(), $group = '')
    {
    }
    /**
     * Get next scheduled action.
     *
     * @param string $hook Action's hook.
     * @param array  $args Action's args.
     * @param string $group Action's group.
     *
     * @deprecated 2.1.0
     *
     * @return int|bool The timestamp for the next occurrence, or false if nothing was found
     */
    function wc_next_scheduled_action($hook, $args = \null, $group = '')
    {
    }
    /**
     * Find scheduled actions
     *
     * @param array  $args Possible arguments, with their default values:
     *        'hook' => '' - the name of the action that will be triggered
     *        'args' => NULL - the args array that will be passed with the action
     *        'date' => NULL - the scheduled date of the action. Expects a DateTime object, a unix timestamp, or a string that can parsed with strtotime(). Used in UTC timezone.
     *        'date_compare' => '<=' - operator for testing "date". accepted values are '!=', '>', '>=', '<', '<=', '='
     *        'modified' => NULL - the date the action was last updated. Expects a DateTime object, a unix timestamp, or a string that can parsed with strtotime(). Used in UTC timezone.
     *        'modified_compare' => '<=' - operator for testing "modified". accepted values are '!=', '>', '>=', '<', '<=', '='
     *        'group' => '' - the group the action belongs to
     *        'status' => '' - ActionScheduler_Store::STATUS_COMPLETE or ActionScheduler_Store::STATUS_PENDING
     *        'claimed' => NULL - TRUE to find claimed actions, FALSE to find unclaimed actions, a string to find a specific claim ID
     *        'per_page' => 5 - Number of results to return
     *        'offset' => 0
     *        'orderby' => 'date' - accepted values are 'hook', 'group', 'modified', or 'date'
     *        'order' => 'ASC'.
     * @param string $return_format OBJECT, ARRAY_A, or ids.
     *
     * @deprecated 2.1.0
     *
     * @return array
     */
    function wc_get_scheduled_actions($args = array(), $return_format = \OBJECT)
    {
    }
    /**
     * General API functions for scheduling actions
     *
     * @package ActionScheduler.
     */
    /**
     * Enqueue an action to run one time, as soon as possible
     *
     * @param string $hook The hook to trigger.
     * @param array  $args Arguments to pass when the hook triggers.
     * @param string $group The group to assign this job to.
     * @param bool   $unique Whether the action should be unique. It will not be scheduled if another pending or running action has the same hook and group parameters.
     * @param int    $priority Lower values take precedence over higher values. Defaults to 10, with acceptable values falling in the range 0-255.
     *
     * @return int The action ID. Zero if there was an error scheduling the action.
     */
    function as_enqueue_async_action($hook, $args = array(), $group = '', $unique = \false, $priority = 10)
    {
    }
    /**
     * Schedule an action to run one time
     *
     * @param int    $timestamp When the job will run.
     * @param string $hook The hook to trigger.
     * @param array  $args Arguments to pass when the hook triggers.
     * @param string $group The group to assign this job to.
     * @param bool   $unique Whether the action should be unique. It will not be scheduled if another pending or running action has the same hook and group parameters.
     * @param int    $priority Lower values take precedence over higher values. Defaults to 10, with acceptable values falling in the range 0-255.
     *
     * @return int The action ID. Zero if there was an error scheduling the action.
     */
    function as_schedule_single_action($timestamp, $hook, $args = array(), $group = '', $unique = \false, $priority = 10)
    {
    }
    /**
     * Schedule a recurring action
     *
     * @param int    $timestamp When the first instance of the job will run.
     * @param int    $interval_in_seconds How long to wait between runs.
     * @param string $hook The hook to trigger.
     * @param array  $args Arguments to pass when the hook triggers.
     * @param string $group The group to assign this job to.
     * @param bool   $unique Whether the action should be unique. It will not be scheduled if another pending or running action has the same hook and group parameters.
     * @param int    $priority Lower values take precedence over higher values. Defaults to 10, with acceptable values falling in the range 0-255.
     *
     * @return int The action ID. Zero if there was an error scheduling the action.
     */
    function as_schedule_recurring_action($timestamp, $interval_in_seconds, $hook, $args = array(), $group = '', $unique = \false, $priority = 10)
    {
    }
    /**
     * Schedule an action that recurs on a cron-like schedule.
     *
     * @param int    $timestamp The first instance of the action will be scheduled
     *           to run at a time calculated after this timestamp matching the cron
     *           expression. This can be used to delay the first instance of the action.
     * @param string $schedule A cron-link schedule string.
     * @see http://en.wikipedia.org/wiki/Cron
     *   *    *    *    *    *    *
     *   ┬    ┬    ┬    ┬    ┬    ┬
     *   |    |    |    |    |    |
     *   |    |    |    |    |    + year [optional]
     *   |    |    |    |    +----- day of week (0 - 7) (Sunday=0 or 7)
     *   |    |    |    +---------- month (1 - 12)
     *   |    |    +--------------- day of month (1 - 31)
     *   |    +-------------------- hour (0 - 23)
     *   +------------------------- min (0 - 59)
     * @param string $hook The hook to trigger.
     * @param array  $args Arguments to pass when the hook triggers.
     * @param string $group The group to assign this job to.
     * @param bool   $unique Whether the action should be unique. It will not be scheduled if another pending or running action has the same hook and group parameters.
     * @param int    $priority Lower values take precedence over higher values. Defaults to 10, with acceptable values falling in the range 0-255.
     *
     * @return int The action ID. Zero if there was an error scheduling the action.
     */
    function as_schedule_cron_action($timestamp, $schedule, $hook, $args = array(), $group = '', $unique = \false, $priority = 10)
    {
    }
    /**
     * Cancel the next occurrence of a scheduled action.
     *
     * While only the next instance of a recurring or cron action is unscheduled by this method, that will also prevent
     * all future instances of that recurring or cron action from being run. Recurring and cron actions are scheduled in
     * a sequence instead of all being scheduled at once. Each successive occurrence of a recurring action is scheduled
     * only after the former action is run. If the next instance is never run, because it's unscheduled by this function,
     * then the following instance will never be scheduled (or exist), which is effectively the same as being unscheduled
     * by this method also.
     *
     * @param string $hook The hook that the job will trigger.
     * @param array  $args Args that would have been passed to the job.
     * @param string $group The group the job is assigned to.
     *
     * @return int|null The scheduled action ID if a scheduled action was found, or null if no matching action found.
     */
    function as_unschedule_action($hook, $args = array(), $group = '')
    {
    }
    /**
     * Cancel all occurrences of a scheduled action.
     *
     * @param string $hook The hook that the job will trigger.
     * @param array  $args Args that would have been passed to the job.
     * @param string $group The group the job is assigned to.
     */
    function as_unschedule_all_actions($hook, $args = array(), $group = '')
    {
    }
    /**
     * Check if there is an existing action in the queue with a given hook, args and group combination.
     *
     * An action in the queue could be pending, in-progress or async. If the is pending for a time in
     * future, its scheduled date will be returned as a timestamp. If it is currently being run, or an
     * async action sitting in the queue waiting to be processed, in which case boolean true will be
     * returned. Or there may be no async, in-progress or pending action for this hook, in which case,
     * boolean false will be the return value.
     *
     * @param string $hook Name of the hook to search for.
     * @param array  $args Arguments of the action to be searched.
     * @param string $group Group of the action to be searched.
     *
     * @return int|bool The timestamp for the next occurrence of a pending scheduled action, true for an async or in-progress action or false if there is no matching action.
     */
    function as_next_scheduled_action($hook, $args = \null, $group = '')
    {
    }
    /**
     * Check if there is a scheduled action in the queue but more efficiently than as_next_scheduled_action().
     *
     * It's recommended to use this function when you need to know whether a specific action is currently scheduled
     * (pending or in-progress).
     *
     * @since 3.3.0
     *
     * @param string $hook  The hook of the action.
     * @param array  $args  Args that have been passed to the action. Null will matches any args.
     * @param string $group The group the job is assigned to.
     *
     * @return bool True if a matching action is pending or in-progress, false otherwise.
     */
    function as_has_scheduled_action($hook, $args = \null, $group = '')
    {
    }
    /**
     * Find scheduled actions
     *
     * @param array  $args Possible arguments, with their default values.
     *         'hook' => '' - the name of the action that will be triggered.
     *         'args' => NULL - the args array that will be passed with the action.
     *         'date' => NULL - the scheduled date of the action. Expects a DateTime object, a unix timestamp, or a string that can parsed with strtotime(). Used in UTC timezone.
     *         'date_compare' => '<=' - operator for testing "date". accepted values are '!=', '>', '>=', '<', '<=', '='.
     *         'modified' => NULL - the date the action was last updated. Expects a DateTime object, a unix timestamp, or a string that can parsed with strtotime(). Used in UTC timezone.
     *         'modified_compare' => '<=' - operator for testing "modified". accepted values are '!=', '>', '>=', '<', '<=', '='.
     *         'group' => '' - the group the action belongs to.
     *         'status' => '' - ActionScheduler_Store::STATUS_COMPLETE or ActionScheduler_Store::STATUS_PENDING.
     *         'claimed' => NULL - TRUE to find claimed actions, FALSE to find unclaimed actions, a string to find a specific claim ID.
     *         'per_page' => 5 - Number of results to return.
     *         'offset' => 0.
     *         'orderby' => 'date' - accepted values are 'hook', 'group', 'modified', 'date' or 'none'.
     *         'order' => 'ASC'.
     *
     * @param string $return_format OBJECT, ARRAY_A, or ids.
     *
     * @return array
     */
    function as_get_scheduled_actions($args = array(), $return_format = \OBJECT)
    {
    }
    /**
     * Helper function to create an instance of DateTime based on a given
     * string and timezone. By default, will return the current date/time
     * in the UTC timezone.
     *
     * Needed because new DateTime() called without an explicit timezone
     * will create a date/time in PHP's timezone, but we need to have
     * assurance that a date/time uses the right timezone (which we almost
     * always want to be UTC), which means we need to always include the
     * timezone when instantiating datetimes rather than leaving it up to
     * the PHP default.
     *
     * @param mixed  $date_string A date/time string. Valid formats are explained in http://php.net/manual/en/datetime.formats.php.
     * @param string $timezone A timezone identifier, like UTC or Europe/Lisbon. The list of valid identifiers is available http://php.net/manual/en/timezones.php.
     *
     * @return ActionScheduler_DateTime
     */
    function as_get_datetime_object($date_string = \null, $timezone = 'UTC')
    {
    }
}