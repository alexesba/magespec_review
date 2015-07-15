<?namespace SpecHelper;

class CustomObjectBehavior extends ObjectBehavior
{
    public function getMatchers(){
        return [
            'extendsClass' => function ($subject, $key) {
                return get_parent_class($subject) === $key;
            }
        ];
    }
}