<?
class Template
{
    private $content = null;
    public function run($content, $data)
    {
        extract($data);
        if (!empty($content)) {
            $this->content = $content;
            $this->printEntities();
            $this->printRaw();
            $this->ifCondition();
            $this->phpBegin();
            $this->phpEnd();
            eval('?>' . $this->content . '<?');
        }
    }
    public function printEntities()
    {
        preg_match_all('~{{\s*(.+?)\s*}}~is', $this->content, $matches);
        if (!empty($matches[1])) {
            foreach ($matches[1] as $key =>  $value) {
                $this->content = str_replace($matches[0][$key], '<? echo htmlentities(' . $value . '); ?>', $this->content);
            }
        }
    }
    public function printRaw()
    {
        preg_match_all('~{!\s*(.+?)\s*!}~is', $this->content, $matches);
        if (!empty($matches[1])) {
            foreach ($matches[1] as $key =>  $value) {
                $this->content = str_replace($matches[0][$key], '<? echo ' . $value . '; ?>', $this->content);
            }
        }
    }
    public function ifCondition()
    {
        preg_match_all('~@if\s*\((.+?)\s*\)\s*$~im', $this->content, $matches);

        if (!empty($matches[1])) {
            foreach ($matches[1] as $key =>  $value) {
                $this->content = str_replace($matches[0][$key], '<? if (' . $value . '): ?>', $this->content);
            }
        }
        preg_match_all('~@else\s*$~im', $this->content, $matches);
        if (!empty($matches[0])) {
            foreach ($matches[0] as $key =>  $value) {
                $this->content = str_replace($matches[0][$key], '<? else: ?>', $this->content);
            }
        }
        preg_match_all('~@endif\s*$~im', $this->content, $matches);
        if (!empty($matches[0])) {
            foreach ($matches[0] as $key =>  $value) {
                $this->content = str_replace($matches[0][$key], '<? endif; ?>', $this->content);
            }
        }
    }
    public function phpBegin(){
        preg_match_all('~@php~is', $this->content, $matches);
        if (!empty($matches[0])) {
            foreach ($matches[0] as $key =>  $value) {
                $this->content = str_replace($matches[0][$key], '<? ', $this->content);
            }
        }
    }
    public function phpEnd(){
        preg_match_all('~@endPhp~is', $this->content, $matches);
        if (!empty($matches[0])) {
            foreach ($matches[0] as $key =>  $value) {
                $this->content = str_replace($matches[0][$key], '?> ', $this->content);
            }
        }
    }
    public function forLoop(){
        preg_match_all('~@for\s*\((.+?)\s*\)\s*$~im', $this->content, $matches);
        if (!empty($matches[1])) {
            foreach ($matches[1] as $key =>  $value) {
                $this->content = str_replace($matches[0][$key], '<? for (' . $value . '): ?>', $this->content);
            }
        }
        preg_match_all('~@endfor\s*$~im', $this->content, $matches);
        if (!empty($matches[0])) {
            foreach ($matches[0] as $key =>  $value) {
                $this->content = str_replace($matches[0][$key], '<? endfor; ?>', $this->content);
            }
        }
    }
}
