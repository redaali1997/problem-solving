# Problem Solving — DSA Learning Track

A personal practice log for learning Data Structures & Algorithms by solving problems (mostly from LeetCode) in PHP, organized by pattern rather than topic. Each folder groups problems that share a common technique, with comments tracking the reasoning behind each solution.

## How to run

Each file is a standalone PHP script.

```bash
php "Two pointers/125. Valid Palindrome.php"
```

## Patterns covered

### Two Pointers
Two indices moving toward each other (or in tandem) to avoid nested loops.

| Problem | File |
|---|---|
| 125. Valid Palindrome | [Two pointers/125. Valid Palindrome.php](Two%20pointers/125.%20Valid%20Palindrome.php) |
| 167. Two Sum II - Input Array Is Sorted | [Two pointers/167. Two Sum II - Input Array Is Sorted.php](Two%20pointers/167.%20Two%20Sum%20II%20-%20Input%20Array%20Is%20Sorted.php) |
| 344. Reverse String | [Two pointers/344- Reverse String.php](Two%20pointers/344-%20Reverse%20String.php) |
| 209. Minimum Size Subarray Sum | [Two pointers/*209. Minimum Size Subarray Sum.php](Two%20pointers/*209.%20Minimum%20Size%20Subarray%20Sum.php) |
| 3. Longest Substring Without Repeating Characters | [Two pointers/*3. Longest Substring Without Repeating Characters.php](Two%20pointers/*3.%20Longest%20Substring%20Without%20Repeating%20Characters.php) |

### Sliding Window
Maintaining a moving subarray/substring window, expanding and shrinking it instead of recomputing from scratch.

| Problem | File |
|---|---|
| 643. Maximum Average Subarray I (brute force + optimized) | [Sliding Window/643. Maximum Average Subarray I .php](Sliding%20Window/643.%20Maximum%20Average%20Subarray%20I%20.php) |

### Seen / Hashmap (Complement Pattern)
Trading an O(n²) lookup for O(n) using a hashmap to remember what's been seen.

| Problem | File |
|---|---|
| 1. Two Sum | [Seen hashmap/1- Two Sum.php](Seen%20hashmap/1-%20Two%20Sum.php) |

### Recursion
Breaking a problem into smaller subproblems, including base cases, memoization, and divide & conquer.

| Problem | File |
|---|---|
| 509. Fibonacci Number | [Recursion/509. Fibonacci Number.php](Recursion/509.%20Fibonacci%20Number.php) |
| 70. Climbing Stairs (memoized) | [Recursion/70. Climbing Stairs.php](Recursion/70.%20Climbing%20Stairs.php) |
| 704. Binary Search | [Recursion/704. Binary Search.php](Recursion/704.%20Binary%20Search.php) |
| Recursion fundamentals (factorial, array sum, binary search) | [Recursion/recursion.php](Recursion/recursion.php) |

## Goals

- Recognize which pattern a problem fits before writing code.
- Implement both a brute-force and an optimized solution where useful, to internalize the trade-off.
- Build a reusable mental toolkit of patterns (two pointers, sliding window, hashmap, recursion, and more to come) that transfers across unfamiliar problems.
