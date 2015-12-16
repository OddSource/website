<?php

function format_release_notes_text($line, $project_prefix)
{
	$line = trim($line);
	$line = str_replace('BREAKING:', '<span class="breaking-change">BREAKING:</span>', $line);
	$line = str_replace('KNOWN ISSUE:', '<span class="known-issue">KNOWN ISSUE:</span>', $line);
	$line = preg_replace('/('.$project_prefix.'-[0-9]+)/', '<a href="https://issues.java.nicholaswilliams.net/issue/${1}" class="fixed-issue" target="_blank">${1}</a>', $line);
	
	return $line;
}

function format_release_notes($originalContents, $project_prefix)
{
	$contents = '';

	$inH3 = false;
	$inUL = false;
	$inLI = false;
	
	foreach(preg_split('/((\r?\n)|(\n?\r))/', $originalContents) as $line)
	{
		if(strlen(trim($line)) == 0)
		{
			 // ignore it
		}
		elseif(preg_match('/^(-){10,}$/', $line))
		{
			if($inH3 === true)
			{
				$inH3 = false;
				$inUL = true;
				$contents .= '</h3>'."\r\n".'<ul class="release-notes">'."\r\n\t";
			}
			elseif($inUL === true)
			{
				$inUL = false;
				$inH3 = true;
				$inLI = false;
				$contents .= '</li>'."\r\n".'</ul>'."\r\n".'<h3>';
			}
			else
			{
				$inH3 = true;
				$contents .= '<h3>';
			}
		}
		elseif(substr($line, 0, 3) == ' - ')
		{
			if($inUL === true)
			{
				if($inLI === true)
				{
					$contents .= '</li>'."\r\n\t".'<li>';
				}
				else
				{
					$inLI = true;
					$contents .= '<li>';
				}
				$contents .= trim(format_release_notes_text($line, $project_prefix), ' -');
			}
			else
				$contents .= ' '.trim(format_release_notes_text($line, $project_prefix));
		}
		else
			$contents .= ' '.trim(format_release_notes_text($line, $project_prefix));
	}
	
	if($inLI === true)
		$contents .= '</li>'."\r\n";
	if($inUL === true)
		$contents .= '</ul>'."\r\n";
	if($inH3 === true)
		$contents .= '</h3>'."\r\n";
		
	return $contents;
}

?>
