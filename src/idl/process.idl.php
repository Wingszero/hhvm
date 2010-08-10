<?php
/**
 * Automatically generated by running "php schema.php process".
 *
 * You may modify the file, but re-running schema.php against this file will
 * standardize the format without losing your schema changes. It does lose
 * any changes that are not part of schema. Use "note" field to comment on
 * schema itself, and "note" fields are not used in any code generation but
 * only staying within this file.
 */
///////////////////////////////////////////////////////////////////////////////
// Preamble: C++ code inserted at beginning of ext_{name}.h

DefinePreamble(<<<CPP

CPP
);

///////////////////////////////////////////////////////////////////////////////
// Constants
//
// array (
//   'name' => name of the constant
//   'type' => type of the constant
//   'note' => additional note about this constant's schema
// )


///////////////////////////////////////////////////////////////////////////////
// Functions
//
// array (
//   'name'   => name of the function
//   'desc'   => description of the function's purpose
//   'flags'  => attributes of the function, see base.php for possible values
//   'opt'    => optimization callback function's name for compiler
//   'note'   => additional note about this function's schema
//   'return' =>
//      array (
//        'type'  => return type, use Reference for ref return
//        'desc'  => description of the return value
//      )
//   'args'   => arguments
//      array (
//        'name'  => name of the argument
//        'type'  => type of the argument, use Reference for output parameter
//        'value' => default value of the argument
//        'desc'  => description of the argument
//      )
// )

DefineFunction(
  array(
    'name'   => "pcntl_alarm",
    'desc'   => "Creates a timer that will send a SIGALRM signal to the process after the given number of seconds. Any call to pcntl_alarm() will cancel any previously set alarm.",
    'return' => array(
      'type'   => Int32,
      'desc'   => "Returns the time in seconds that any previously scheduled alarm had remaining before it was to be delivered, or 0 if there was no previously scheduled alarm.",
    ),
    'args'   => array(
      array(
        'name'   => "seconds",
        'type'   => Int32,
        'desc'   => "The number of seconds to wait. If seconds is zero, no new alarm is created.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "pcntl_exec",
    'desc'   => "Executes the program with the given arguments.",
    'return' => array(
      'type'   => null,
      'desc'   => "Returns FALSE on error and does not return on success. pcntl_fork pcntl_alarm Last updated: Fri, 06 Aug 2010  ",
    ),
    'args'   => array(
      array(
        'name'   => "path",
        'type'   => String,
        'desc'   => "path must be the path to a binary executable or a script with a valid path pointing to an executable in the shebang ( #!/usr/local/bin/perl for example) as the first line. See your system's man execve(2) page for additional information.",
      ),
      array(
        'name'   => "args",
        'type'   => StringVec,
        'value'  => "null_array",
        'desc'   => "args is an array of argument strings passed to the program.",
      ),
      array(
        'name'   => "envs",
        'type'   => StringVec,
        'value'  => "null_array",
        'desc'   => "envs is an array of strings which are passed as environment to the program. The array is in the format of name => value, the key being the name of the environmental variable and the value being the value of that variable.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "pcntl_fork",
    'desc'   => "The pcntl_fork() function creates a child process that differs from the parent process only in its PID and PPID. Please see your system's fork(2) man page for specific details as to how fork works on your system.",
    'return' => array(
      'type'   => Int32,
      'desc'   => "On success, the PID of the child process is returned in the parent's thread of execution, and a 0 is returned in the child's thread of execution. On failure, a -1 will be returned in the parent's context, no child process will be created, and a PHP error is raised.",
    ),
  ));

DefineFunction(
  array(
    'name'   => "pcntl_getpriority",
    'desc'   => "pcntl_getpriority() gets the priority of pid. Because priority levels can differ between system types and kernel versions, please see your system's getpriority(2) man page for specific details.",
    'return' => array(
      'type'   => Variant,
      'desc'   => "pcntl_getpriority() returns the priority of the process or FALSE on error. A lower numerical value causes more favorable scheduling. WarningThis function may return Boolean FALSE, but may also return a non-Boolean value which evaluates to FALSE, such as 0 or \"\". Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.",
    ),
    'args'   => array(
      array(
        'name'   => "pid",
        'type'   => Int32,
        'value'  => "0",
        'desc'   => "If not specified, the pid of the current process is used.",
      ),
      array(
        'name'   => "process_identifier",
        'type'   => Int32,
        'value'  => "0",
        'desc'   => "One of PRIO_PGRP, PRIO_USER or PRIO_PROCESS.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "pcntl_setpriority",
    'desc'   => "pcntl_setpriority() sets the priority of pid.",
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE on success or FALSE on failure.",
    ),
    'args'   => array(
      array(
        'name'   => "priority",
        'type'   => Int32,
        'desc'   => "priority is generally a value in the range -20 to 20. The default priority is 0 while a lower numerical value causes more favorable scheduling. Because priority levels can differ between system types and kernel versions, please see your system's setpriority(2) man page for specific details.",
      ),
      array(
        'name'   => "pid",
        'type'   => Int32,
        'value'  => "0",
        'desc'   => "If not specified, the pid of the current process is used.",
      ),
      array(
        'name'   => "process_identifier",
        'type'   => Int32,
        'value'  => "0",
        'desc'   => "One of PRIO_PGRP, PRIO_USER or PRIO_PROCESS.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "pcntl_signal",
    'desc'   => "The pcntl_signal() function installs a new signal handler for the signal indicated by signo.",
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE on success or FALSE on failure.",
    ),
    'args'   => array(
      array(
        'name'   => "signo",
        'type'   => Int32,
        'desc'   => "The signal number.",
      ),
      array(
        'name'   => "handler",
        'type'   => Variant,
        'desc'   => "The signal handler which may be the name of a user created function, or method, or either of the two global constants SIG_IGN or SIG_DFL. Note: Note that when you set a handler to an object method, that object's reference count is increased which makes it persist until you either change the handler to something else, or your script ends.",
      ),
      array(
        'name'   => "restart_syscalls",
        'type'   => Boolean,
        'value'  => "true",
        'desc'   => "Specifies whether system call restarting should be used when this signal arrives.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "pcntl_wait",
    'desc'   => "The wait function suspends execution of the current process until a child has exited, or until a signal is delivered whose action is to terminate the current process or to call a signal handling function. If a child has already exited by the time of the call (a so-called \"zombie\" process), the function returns immediately. Any system resources used by the child are freed. Please see your system's wait(2) man page for specific details as to how wait works on your system. Note: This function is equivalent to calling pcntl_waitpid() with a -1 pid and no options.",
    'return' => array(
      'type'   => Int32,
      'desc'   => "pcntl_wait() returns the process ID of the child which exited, -1 on error or zero if WNOHANG was provided as an option (on wait3-available systems) and no child was available.",
    ),
    'args'   => array(
      array(
        'name'   => "status",
        'type'   => Variant | Reference,
        'desc'   => "pcntl_wait() will store status information in the status parameter which can be evaluated using the following functions: pcntl_wifexited(), pcntl_wifstopped(), pcntl_wifsignaled(), pcntl_wexitstatus(), pcntl_wtermsig() and pcntl_wstopsig().",
      ),
      array(
        'name'   => "options",
        'type'   => Int32,
        'value'  => "0",
        'desc'   => "If wait3 is available on your system (mostly BSD-style systems), you can provide the optional options parameter. If this parameter is not provided, wait will be used for the system call. If wait3 is not available, providing a value for options will have no effect. The value of options is the value of zero or more of the following two constants OR'ed together: Possible values for options WNOHANG Return immediately if no child has exited. WUNTRACED Return for children which are stopped, and whose status has not been reported.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "pcntl_waitpid",
    'desc'   => "Suspends execution of the current process until a child as specified by the pid argument has exited, or until a signal is delivered whose action is to terminate the current process or to call a signal handling function.\nIf a child as requested by pid has already exited by the time of the call (a so-called \"zombie\" process), the function returns immediately. Any system resources used by the child are freed. Please see your system's waitpid(2) man page for specific details as to how waitpid works on your system.",
    'return' => array(
      'type'   => Int32,
      'desc'   => "pcntl_waitpid() returns the process ID of the child which exited, -1 on error or zero if WNOHANG was used and no child was available",
    ),
    'args'   => array(
      array(
        'name'   => "pid",
        'type'   => Int32,
        'desc'   => "The value of pid can be one of the following: possible values for pid < -1 wait for any child process whose process group ID is equal to the absolute value of pid. -1 wait for any child process; this is the same behaviour that the wait function exhibits. 0 wait for any child process whose process group ID is equal to that of the calling process. > 0 wait for the child whose process ID is equal to the value of pid. Note: Specifying -1 as the pid is equivalent to the functionality pcntl_wait() provides (minus options).",
      ),
      array(
        'name'   => "status",
        'type'   => Variant | Reference,
        'desc'   => "pcntl_waitpid() will store status information in the status parameter which can be evaluated using the following functions: pcntl_wifexited(), pcntl_wifstopped(), pcntl_wifsignaled(), pcntl_wexitstatus(), pcntl_wtermsig() and pcntl_wstopsig().",
      ),
      array(
        'name'   => "options",
        'type'   => Int32,
        'value'  => "0",
        'desc'   => "The value of options is the value of zero or more of the following two global constants OR'ed together: possible values for options WNOHANG return immediately if no child has exited. WUNTRACED return for children which are stopped, and whose status has not been reported.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "pcntl_wexitstatus",
    'desc'   => "Returns the return code of a terminated child. This function is only useful if pcntl_wifexited() returned TRUE.",
    'return' => array(
      'type'   => Int32,
      'desc'   => "Returns the return code, as an integer.",
    ),
    'args'   => array(
      array(
        'name'   => "status",
        'type'   => Int32,
        'desc'   => "status parameter is the status parameter supplied to a successful call to pcntl_waitpid().",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "pcntl_wifexited",
    'desc'   => "Checks whether the child status code represents a normal exit.",
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE if the child status code represents a normal exit, FALSE otherwise.",
    ),
    'args'   => array(
      array(
        'name'   => "status",
        'type'   => Int32,
        'desc'   => "status parameter is the status parameter supplied to a successful call to pcntl_waitpid().",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "pcntl_wifsignaled",
    'desc'   => "Checks whether the child process exited because of a signal which was not caught.",
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE if the child process exited because of a signal which was not caught, FALSE otherwise.",
    ),
    'args'   => array(
      array(
        'name'   => "status",
        'type'   => Int32,
        'desc'   => "status parameter is the status parameter supplied to a successful call to pcntl_waitpid().",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "pcntl_wifstopped",
    'desc'   => "Checks whether the child process which caused the return is currently stopped; this is only possible if the call to pcntl_waitpid() was done using the option WUNTRACED.",
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE if the child process which caused the return is currently stopped, FALSE otherwise.",
    ),
    'args'   => array(
      array(
        'name'   => "status",
        'type'   => Int32,
        'desc'   => "status parameter is the status parameter supplied to a successful call to pcntl_waitpid().",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "pcntl_wstopsig",
    'desc'   => "Returns the number of the signal which caused the child to stop. This function is only useful if pcntl_wifstopped() returned TRUE.",
    'return' => array(
      'type'   => Int32,
      'desc'   => "Returns the signal number.",
    ),
    'args'   => array(
      array(
        'name'   => "status",
        'type'   => Int32,
        'desc'   => "status parameter is the status parameter supplied to a successful call to pcntl_waitpid().",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "pcntl_wtermsig",
    'desc'   => "Returns the number of the signal that caused the child process to terminate. This function is only useful if pcntl_wifsignaled() returned TRUE.",
    'return' => array(
      'type'   => Int32,
      'desc'   => "Returns the signal number, as an integer.",
    ),
    'args'   => array(
      array(
        'name'   => "status",
        'type'   => Int32,
        'desc'   => "status parameter is the status parameter supplied to a successful call to pcntl_waitpid().",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "pcntl_signal_dispatch",
    'desc'   => "The pcntl_signal_dispatch() function calls the signal handlers installed by pcntl_signal() for each pending signal.",
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE on success or FALSE on failure.",
    ),
  ));

DefineFunction(
  array(
    'name'   => "shell_exec",
    'desc'   => "This function is identical to the backtick operator.",
    'return' => array(
      'type'   => String,
      'desc'   => "The output from the executed command.",
    ),
    'args'   => array(
      array(
        'name'   => "cmd",
        'type'   => String,
        'desc'   => "The command that will be executed.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "exec",
    'desc'   => "exec() executes the given command.",
    'return' => array(
      'type'   => String,
      'desc'   => "The last line from the result of the command. If you need to execute a command and have all the data from the command passed directly back without any interference, use the passthru() function.\nTo get the output of the executed command, be sure to set and use the output parameter.",
    ),
    'args'   => array(
      array(
        'name'   => "command",
        'type'   => String,
        'desc'   => "The command that will be executed.",
      ),
      array(
        'name'   => "output",
        'type'   => Variant | Reference,
        'value'  => "null",
        'desc'   => "If the output argument is present, then the specified array will be filled with every line of output from the command. Trailing whitespace, such as \\n, is not included in this array. Note that if the array already contains some elements, exec() will append to the end of the array. If you do not want the function to append elements, call unset() on the array before passing it to exec().",
      ),
      array(
        'name'   => "return_var",
        'type'   => Variant | Reference,
        'value'  => "null",
        'desc'   => "If the return_var argument is present along with the output argument, then the return status of the executed command will be written to this variable.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "passthru",
    'desc'   => "The passthru() function is similar to the exec() function in that it executes a command. This function should be used in place of exec() or system() when the output from the Unix command is binary data which needs to be passed directly back to the browser. A common use for this is to execute something like the pbmplus utilities that can output an image stream directly. By setting the Content-type to image/gif and then calling a pbmplus program to output a gif, you can create PHP scripts that output images directly.",
    'return' => array(
      'type'   => null,
      'desc'   => "No value is returned.",
    ),
    'args'   => array(
      array(
        'name'   => "command",
        'type'   => String,
        'desc'   => "The command that will be executed.",
      ),
      array(
        'name'   => "return_var",
        'type'   => Variant | Reference,
        'value'  => "null",
        'desc'   => "If the return_var argument is present, the return status of the Unix command will be placed here.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "system",
    'desc'   => "system() is just like the C version of the function in that it executes the given command and outputs the result.\nThe system() call also tries to automatically flush the web server's output buffer after each line of output if PHP is running as a server module.\nIf you need to execute a command and have all the data from the command passed directly back without any interference, use the passthru() function.",
    'return' => array(
      'type'   => String,
      'desc'   => "Returns the last line of the command output on success, and FALSE on failure.",
    ),
    'args'   => array(
      array(
        'name'   => "command",
        'type'   => String,
        'desc'   => "The command that will be executed.",
      ),
      array(
        'name'   => "return_var",
        'type'   => Variant | Reference,
        'value'  => "null",
        'desc'   => "If the return_var argument is present, then the return status of the executed command will be written to this variable.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "proc_open",
    'desc'   => "proc_open() is similar to popen() but provides a much greater degree of control over the program execution.",
    'return' => array(
      'type'   => Variant,
      'desc'   => "Returns a resource representing the process, which should be freed using proc_close() when you are finished with it. On failure returns FALSE.",
    ),
    'args'   => array(
      array(
        'name'   => "cmd",
        'type'   => String,
        'desc'   => "The command to execute",
      ),
      array(
        'name'   => "descriptorspec",
        'type'   => VariantVec,
        'desc'   => "An indexed array where the key represents the descriptor number and the value represents how PHP will pass that descriptor to the child process. 0 is stdin, 1 is stdout, while 2 is stderr.\nEach element can be: An array describing the pipe to pass to the process. The first element is the descriptor type and the second element is an option for the given type. Valid types are pipe (the second element is either r to pass the read end of the pipe to the process, or w to pass the write end) and file (the second element is a filename). A stream resource representing a real file descriptor (e.g. opened file, a socket, STDIN).\nThe file descriptor numbers are not limited to 0, 1 and 2 - you may specify any valid file descriptor number and it will be passed to the child process. This allows your script to interoperate with other scripts that run as \"co-processes\". In particular, this is useful for passing passphrases to programs like PGP, GPG and openssl in a more secure manner. It is also useful for reading status information provided by those programs on auxiliary file descriptors.",
      ),
      array(
        'name'   => "pipes",
        'type'   => Variant | Reference,
        'desc'   => "Will be set to an indexed array of file pointers that correspond to PHP's end of any pipes that are created.",
      ),
      array(
        'name'   => "cwd",
        'type'   => String,
        'value'  => "null_string",
        'desc'   => "The initial working dir for the command. This must be an absolute directory path, or NULL if you want to use the default value (the working dir of the current PHP process)",
      ),
      array(
        'name'   => "env",
        'type'   => Variant,
        'value'  => "null_variant",
        'desc'   => "An array with the environment variables for the command that will be run, or NULL to use the same environment as the current PHP process",
      ),
      array(
        'name'   => "other_options",
        'type'   => Variant,
        'value'  => "null_variant",
        'desc'   => "Allows you to specify additional options. Currently supported options include: suppress_errors (windows only): suppresses errors generated by this function when it's set to TRUE bypass_shell (windows only): bypass cmd.exe shell when set to TRUE context: stream context used when opening files (created with stream_context_create()) binary_pipes: open pipes in binary mode, instead of using the usual stream_encoding",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "proc_terminate",
    'desc'   => "Signals a process (created using proc_open()) that it should terminate. proc_terminate() returns immediately and does not wait for the process to terminate.\nproc_terminate() allows you terminate the process and continue with other tasks. You may poll the process (to see if it has stopped yet) by using the proc_get_status() function.",
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns the termination status of the process that was run.",
    ),
    'args'   => array(
      array(
        'name'   => "process",
        'type'   => Resource,
        'desc'   => "The proc_open() resource that will be closed.",
      ),
      array(
        'name'   => "signal",
        'type'   => Int32,
        'value'  => "0",
        'desc'   => "This optional parameter is only useful on POSIX operating systems; you may specify a signal to send to the process using the kill(2) system call. The default is SIGTERM.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "proc_close",
    'desc'   => "proc_close() is similar to pclose() except that it only works on processes opened by proc_open(). proc_close() waits for the process to terminate, and returns its exit code. If you have open pipes to that process, you should fclose() them prior to calling this function in order to avoid a deadlock - the child process may not be able to exit while the pipes are open.",
    'return' => array(
      'type'   => Int32,
      'desc'   => "Returns the termination status of the process that was run. proc_get_status passthru Last updated: Fri, 06 Aug 2010  ",
    ),
    'args'   => array(
      array(
        'name'   => "process",
        'type'   => Resource,
        'desc'   => "The proc_open() resource that will be closed.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "proc_get_status",
    'desc'   => "proc_get_status() fetches data about a process opened using proc_open().",
    'return' => array(
      'type'   => VariantMap,
    ),
    'args'   => array(
      array(
        'name'   => "process",
        'type'   => Resource,
        'desc'   => "The proc_open() resource that will be evaluated.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "proc_nice",
    'desc'   => "proc_nice() changes the priority of the current process by the amount specified in increment. A positive increment will lower the priority of the current process, whereas a negative increment will raise the priority.\nproc_nice() is not related to proc_open() and its associated functions in any way.",
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE on success or FALSE on failure. If an error occurs, like the user lacks permission to change the priority, an error of level E_WARNING is also generated.",
    ),
    'args'   => array(
      array(
        'name'   => "increment",
        'type'   => Int32,
        'desc'   => "The increment value of the priority change.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "escapeshellarg",
    'desc'   => "escapeshellarg() adds single quotes around a string and quotes/escapes any existing single quotes allowing you to pass a string directly to a shell function and having it be treated as a single safe argument. This function should be used to escape individual arguments to shell functions coming from user input. The shell functions include exec(), system() and the backtick operator.",
    'return' => array(
      'type'   => String,
      'desc'   => "The escaped string.",
    ),
    'args'   => array(
      array(
        'name'   => "arg",
        'type'   => String,
        'desc'   => "The argument that will be escaped.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "escapeshellcmd",
    'desc'   => "escapeshellcmd() escapes any characters in a string that might be used to trick a shell command into executing arbitrary commands. This function should be used to make sure that any data coming from user input is escaped before this data is passed to the exec() or system() functions, or to the backtick operator.\nFollowing characters are preceded by a backslash: #&;`|*?~<>^()[]{}\$\\, \\x0A and \\xFF. ' and \" are escaped only if they are not paired. In Windows, all these characters plus % are replaced by a space instead.",
    'return' => array(
      'type'   => String,
      'desc'   => "The escaped string.",
    ),
    'args'   => array(
      array(
        'name'   => "command",
        'type'   => String,
        'desc'   => "The command that will be escaped.",
      ),
    ),
  ));


///////////////////////////////////////////////////////////////////////////////
// Classes
//
// BeginClass
// array (
//   'name'   => name of the class
//   'desc'   => description of the class's purpose
//   'flags'  => attributes of the class, see base.php for possible values
//   'note'   => additional note about this class's schema
//   'parent' => parent class name, if any
//   'ifaces' => array of interfaces tihs class implements
//   'bases'  => extra internal and special base classes this class requires
//   'footer' => extra C++ inserted at end of class declaration
// )
//
// DefineConstant(..)
// DefineConstant(..)
// ...
// DefineFunction(..)
// DefineFunction(..)
// ...
// DefineProperty
// DefineProperty
//
// array (
//   'name'  => name of the property
//   'type'  => type of the property
//   'flags' => attributes of the property
//   'desc'  => description of the property
//   'note'  => additional note about this property's schema
// )
//
// EndClass()

