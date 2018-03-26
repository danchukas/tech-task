<?php
declare(strict_types=1);


namespace DanchukAS\AmadeusTechTask123;


/**
 * Interface ILib
 *
 * Generated by util/ILibGenerator.php automatically.
 * ============ WARNING ====================
 * = Not edit manual !                     =
 * = If you want change something          =
 * = create new class and inherit by this. =
 * =========================================
 *
 * @property ILib\IAction action
 *
 * @method callAction($object, string $action_name, array $action_param = null) {
 * @see \DanchukAS\AmadeusTechTask123\Lib\CallAction::run
 * }
 *
 * @method createAnimal($name, $class = \Animal::class) {
 * @see \DanchukAS\AmadeusTechTask123\Lib\CreateAnimal::run
 * }
 *
 * @method createFunctionalObject($class = null) {
 * @see \DanchukAS\AmadeusTechTask123\Lib\CreateFunctionalObject::run
 * }
 *
 * @method createObject($class = null) {
 * @see \DanchukAS\AmadeusTechTask123\Lib\CreateObject::run
 * }
 *
 * @method getAbilityForAction($action) {
 * @see \DanchukAS\AmadeusTechTask123\Lib\GetAbilityForAction::run
 * }
 *
 * @method getActionClass($action, $object = null) {
 * @see \DanchukAS\AmadeusTechTask123\Lib\GetActionClass::run
 * }
 *
 * @method string getActionClassName($object, $action_method_name) {
 * @see \DanchukAS\AmadeusTechTask123\Lib\GetActionClassName::run
 * }
 *
 * @method string getActionMethodName($action) {
 * @see \DanchukAS\AmadeusTechTask123\Lib\GetActionMethodName::run
 * }
 *
 * @method array getAnimalCollection(\IHasAnimalCollection $object) {
 * @see \DanchukAS\AmadeusTechTask123\Lib\GetAnimalCollection::run
 * }
 *
 * @method getLifeCycle(\IHasLifeCycle $object) {
 * @see \DanchukAS\AmadeusTechTask123\Lib\GetLifeCycle::run
 * }
 *
 * @method getName(\IHasName $object) {
 * @see \DanchukAS\AmadeusTechTask123\Lib\GetName::run
 * }
 *
 * @method initAmadeusZooAnimalCollection() {
 * @see \DanchukAS\AmadeusTechTask123\Lib\InitAmadeusZooAnimalCollection::run
 * }
 *
 * @method isAvailableActionRun($action) {
 * @see \DanchukAS\AmadeusTechTask123\Lib\IsAvailableActionRun::run
 * }
 *
 * @method live($object) {
 * @see \DanchukAS\AmadeusTechTask123\Lib\Live::run
 * }
 *
 * @method output($message) {
 * @see \DanchukAS\AmadeusTechTask123\Lib\Output::run
 * }
 *
 * @method runAction($action) {
 * @see \DanchukAS\AmadeusTechTask123\Lib\RunAction::run
 * }
 *
 * @method void runNewAction($action_class, $run_param) {
 * @see \DanchukAS\AmadeusTechTask123\Lib\RunNewAction::run
 * }
 *
 * @method setAnimalCollection(\IHasAnimalCollection $object, $collection) {
 * @see \DanchukAS\AmadeusTechTask123\Lib\SetAnimalCollection::run
 * }
 *
 * @method setLib($object, $lib) {
 * @see \DanchukAS\AmadeusTechTask123\Lib\SetLib::run
 * }
 *
 * @method setName(\IHasName $object, $name) {
 * @see \DanchukAS\AmadeusTechTask123\Lib\SetName::run
 * }
 */
interface ILib
{

}
