<?php
/**
 * Create by Jake 2023/03/13.
 * DFS (Depth First Search) - 깊이 우선 탐색.
 */

// 그래프 클래스
class Graph
{
    // 노드와 연결된 간선들의 리스트
    public $adjList = [];

    // 노드와 방문 여부를 저장할 배열
    public $visited = [];

    // 노드를 추가하는 메서드
    public function addNode($node)
    {
        $this->adjList[$node] = [];
        $this->visited[$node] = false;
    }

    // 간선을 추가하는 메서드
    public function addEdge($node1, $node2)
    {
        // 무방향 그래프이므로 양방향으로 추가
        array_push($this->adjList[$node1], $node2);
        array_push($this->adjList[$node2], $node1);
    }

    // DFS 탐색 메서드
    public function dfs($node)
    {
        // 현재 노드를 방문 처리
        $this->visited[$node] = true;
        echo $node.' ';

        // 인접한 노드들에 대해 DFS 수행
        foreach ($this->adjList[$node] as $adjNode) {
            if (!$this->visited[$adjNode]) {
                $this->dfs($adjNode);
            }
        }
    }
}

// 그래프 생성 및 노드와 간선 추가
$graph = new Graph();
$graph->addNode('A');
$graph->addNode('B');
$graph->addNode('C');
$graph->addNode('D');
$graph->addNode('E');
$graph->addNode('F');
$graph->addEdge('A', 'B');
$graph->addEdge('A', 'C');
$graph->addEdge('B', 'D');
$graph->addEdge('B', 'E');
$graph->addEdge('C', 'F');
// - DFS 탐색 결과: A B D E C F
// DFS 탐색 수행
echo 'DFS 탐색 결과: ';
$graph->dfs('A');
