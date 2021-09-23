<?php 
namespace ShellCommander;
class Commander
{
    public static function exec($cmd) {
        $stdout=null;
        $stderr=null;

        $proc = proc_open($cmd,[
            1 => ['pipe','w'],
            2 => ['pipe','w'],
        ],$pipes);
        $stdout = stream_get_contents($pipes[1]);
        fclose($pipes[1]);
        $stderr = stream_get_contents($pipes[2]);
        fclose($pipes[2]);
        proc_close($proc);

        return ['output' => $stdout, 'error' => $stderr];
    }
}
