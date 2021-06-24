# Advanced Programming Info

## Algorithms

**algorithms for traversing or searching tree or graph data structures.**

- Depth First Traversal (DFS)
  > Traverse through left subtrees(s) first, then traverse through the right subtrees(s)/.
- Breadth-first Search Traversal (BFS)
  > Traverse through one level of children nodes, then traverse through the level of
  > grandchil nodes (and so on...). <br>
  > Example:![](https://miro.medium.com/max/2400/1*VM84VPcCQe0gSy44l9S5yA.jpeg)

# Problems

> ## Algorithims
>
> 1. Longest SubString Without Repeating Characters
>    [Problem](https://leetcode.com/problems/longest-substring-without-repeating-characters/)
>    > Given a string s, find the length of the longest substring without repeating characters.
>
> Example:

    	Input: s = "abcabcbb"
    	Output: 3
    	Explanation: The answer is "abc", with the length of 3.

> Constraints:
>
> - 0 <= s.length <= 5 \* 104
> - s consists of English letters, digits, symbols and spaces.
>
> My Solution:
>
> > C# Code:  
> > public class Solution {

    public int LengthOfLongestSubstring(string s) {
        char[] inputStringAsCharArray = s.ToCharArray();
        IList<Char> longestSubString = new List<char>();

        int longestSubStringValue = 0;
        //loop the char in string till is at end of string
        foreach(char c in inputStringAsCharArray)
        {
          if(!longestSubString.Contains(c))
          {
            longestSubString.Add(c);
          }
          else
          {
            int indexOfFoundChar = longestSubString.IndexOf(c);
            longestSubString = longestSubString.Skip(indexOfFoundChar + 1).ToList();
            longestSubString.Add(c);
          }
          longestSubStringValue = longestSubStringValue < longestSubString.Count ? longestSubString.Count : longestSubStringValue++;
        }

return longestSubStringValue;
}
}

## polynomial function

> A polynomial function is a function that involves only non-negative integer powers or only positive integer exponents of a variable in an equation like the quadratic equation,

    cubic equation, etc. For example, 2x+5 is a polynomial that has exponent equal to 1.

>
